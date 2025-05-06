#!/bin/bash
# This script fix permissions of world-writable files, it supports spaces in file names

# Validate the first argument is a present
if [[ $# -ne 1 ]]; then
    echo "Missing directory argument"
    echo "Usage: $0 <directory>"
    exit 1
fi

# and make sure it's a directory
dir=$1
if [[ ! -d $dir ]]; then
    echo "$dir is not valid directory"
    exit 1
fi

# Search for problematic files
echo "The following files/directories are world-writable:"
files_to_fix=$(find "$dir" -perm -o=w)
echo "$files_to_fix"

echo "Do you want the permissions to be fixed (y/n)?"
read -r answer
if [[ $answer == "y" ]]; then
    echo "Fixing permissions..."
    # This is a complex line just to support folders with spaces inside
    # we didn't find a way to split the $files_to_fix output by \n but not by space.
    echo "$files_to_fix" | xargs -I _ chmod o-w _
else
    echo Canceled action
fi

echo "The following files/directories are writable for groups:"

# List all file/directory that are group writable but not by the user group
files=$(find "$dir" -perm -g=w ! -group "$USER")
echo "$files"