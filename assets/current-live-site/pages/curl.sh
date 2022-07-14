#!/usr/bin/env bash

# while read -r url; do 
#     fileName=$(sd -p 'https://www.gravells.co.uk/(.*?)/' '$1' <<< "$url")
#     touch "$fileName.html"; 
# done <urls-to-curl

for html in *.html; do
    cat "$html" | htmlq  main -r script > "${html/.html/-main.html}"
done