#!/bin/bash

# cd ~/public_html/

imgs=$(ls raw_files/*.{jpg,png} | grep -vE '_thumb\.(jpg|png)$')

img_part=""

# generate the html for the images
for img in $imgs
do

    filename="${img%.*}"
    extension="${img#${filename}}"

    thumb="${filename}_thumb${extension}"

    s="<div class=\"col-md-6 col-xs-12\"><a href=\"${img}\"><img class=\"vignette\" src=\"${thumb}\" /></a></div>"
    img_part="${img_part}${s}"
done

docs=$(ls raw_files/*.pdf | grep -vE '_thumb\.pdf$')
echo "${docus}"
doc_part=""

# generate the html for the documents
for doc in $docs
do

    filename="${doc%.*}"
    extension="${doc#${filename}}"

    thumb="${filename}_thumb${extension}"

    s="<div class=\"col-md-6 col-xs-12\"><a href=\"${doc}\"><img class=\"vignette\" src=\"${thumb}\" /></a></div>"
    doc_part="${doc_part}${s}"
done

# read the templates
template_begin=$(cat template_begin.html)
template_middle=$(cat template_middle.html)
template_end=$(cat template_end.html)

# substitute the image and document parts
template_middle="${template_middle/\[IMG_PART\]/${img_part}}"
template_middle="${template_middle/\[DOC_PART\]/${doc_part}}"

# make the html
echo "${template_begin}${template_middle}${template_end}" > index.html
