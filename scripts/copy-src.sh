#!/usr/bin/env bash

rm -r ../bak
mkdir ../bak
cp -r '../src/scss' '../bak'
rm '../bak/scss/index.scss'
cp -r '../inc' '../bak'
find ../bak/inc -type f -name '*.php' ! -print0 | xargs -0 sed -i 's/<?php.*include(\(.*\)).*?>/<!--#include file=\1 -->/'
find ../bak/inc -type f -name '*.php' ! -print0 | xargs -0 sed -i 's/.php/.aspx/'
find  ../bak/inc -type f -name '*.php' | sed 'p;s/php/aspx/' | xargs -d '\n' -n 2 mv
