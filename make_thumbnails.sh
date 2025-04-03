#!/bin/bash

cd ~/public_html/

imgs=$(ls raw_files/*.{jpg,png,pdf} | grep -vE '_thumb\.(jpg|png,pdf)$')
for img in $imgs
do

    dim=$(identify -format '%w_%h' $img)
    filename="${img%.*}"
    extension="${img#${filename}}"

    new_name="${filename%.*}_thumb${extension}"    
    echo "$new_name"

    if [[ "${extension}" == ".pdf" ]]
    then
        convert -geometry 300 ${img}.[0] ${new_name}
    else
        convert -geometry 300 ${img} ${new_name}
    fi
done