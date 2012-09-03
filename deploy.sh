#!/bin/sh
composer install
chmod o+w temp log www/webtemp
cp app/config/config.local.template.neon app/config/config.local.neon