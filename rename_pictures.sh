#!/bin/sh

cd ~/public_html/
# list all image file but ignore file with two underscores then numbers
imgs=$(ls ./lab04_raw_files/*.{jpg,png} | grep -vE '_[0-9]+_.*\.(jpg|png)$')
for img in $imgs
do

    dim=$(identify -format '%w_%h' $img)
    filename="${img%.*}"
    extension="${img#${filename}}"

    new_name="${filename%.*}_${dim}.${extension}"

    echo "$new_name"
    cp "$img" "./lab04_renamed/$new_name"
done