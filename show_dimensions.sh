#!/bin/sh

cd ~/public_html/
imgs=$(ls ./lab04_raw_files/*.jpg)

for img in $imgs
do
    identify -format 'width: %w, height: %h' $img
    echo
done