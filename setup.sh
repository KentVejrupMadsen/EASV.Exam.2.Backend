#!/usr/bin/env bash
#
cp ./resources/composer.json ./code/composer.json
cp ./resources/package.json ./code/package.json

#
cd code

# install packages
npm upgrade
composer upgrade