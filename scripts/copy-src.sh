#!/usr/bin/env bash

# cp -r '../src/scss' '../bak'
# rm '../bak/scss/index.scss'
# cp -r '../components' '../bak/components'
# find ../bak/components -type f -name '*.php' ! -print0 | xargs -0 sed -i 's/<?php.*include(\(.*\)).*?>/<!--#include file=\1 -->/'
# find ../bak/components -type f -name '*.php' ! -print0 | xargs -0 sed -i 's/.php/.aspx/'

cd ../bak/components/home/fat-nav
for f in *.php; do 
    mv -- "$f" "${f%.php}.aspx"
    # mv -- "$f" "${f%.txt}.text"
done
