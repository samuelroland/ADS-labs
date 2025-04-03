#!/bin/bash

cd ~/public_html/
imgs=$(ls raw_files/*.{jpg},png)

for img in $imgs
do
    identify -format 'width: %w, height: %h' $img
    echo
done