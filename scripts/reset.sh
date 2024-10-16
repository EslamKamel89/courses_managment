#!/bin/sh
# chmod u+x YourScript.sh

echo "\nReseting the project...\n"
echo "\nClearing cache ....\n"
php artisan clear
# chmod u+x YourScript.sh
php artisan clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "\nDropoing/Recreating the database\n"
php artisan migrate:fresh

eho. "\nDone.:)\n"
