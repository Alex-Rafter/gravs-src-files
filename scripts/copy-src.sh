#!/usr/bin/env bash

rm -r ../bak
mkdir ../bak
cp -r '../src/scss' '../bak'
rm '../bak/scss/index.scss'
mkdir '../bak/scss/vendor'
cp './vendor/index.scss' '../bak/scss/vendor/index.scss'
cp -r '../inc' '../bak'

# Update includes to asp.net syntax
find ../bak/inc -type f -name '*.php' ! -print0 | xargs -0 sed -i 's/<?php.*include(\(.*\)).*?>/<!--#include file=\1 -->/'
find ../bak/inc -type f -name '*.php' ! -print0 | xargs -0 sed -i 's/.php/.aspx/'
find ../bak/inc -type f -name '*.php' ! -print0 | xargs -0 sed -i -e "s/file='\./file=\"/g"

# Update paths to use webpack root path syntax
find ../bak/scss -type f -name '*.scss' ! -print0 | xargs -0 sed -i 's/D:\/src-test\/node_modules\/bootstrap/D:/src-test/node_modules/bootstrap/'

# Change file extensions
find  ../bak/inc -type f -name '*.php' | sed 'p;s/php/aspx/' | xargs -d '\n' -n 2 mv

