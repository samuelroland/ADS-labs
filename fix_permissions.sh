#!/bin/bash

if [[ $# -ne 1 ]]; then
    echo "Missing directory argument"
    echo "Usage: $0 <directory>"
    exit 1
fi


dir=$1
if [[ ! -d $dir ]]; then
    echo "The directory $dir is not valid"
    exit 1
fi

echo "The following files/directories are world-writable:"
file_to_fix=$(find $dir -perm -o=w)
echo "$file_to_fix" | tr ' ' '\n'

echo "Do you want the permissions to be fixed (y/n)?"
read answer
if [[ $answer == "y" ]]; then
    echo "Fixing permissions..."
    chmod o-w $file_to_fix
fi