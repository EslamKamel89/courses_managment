#!/bin/sh
# chmod u+x YourScript.sh

PATH_BASE="${driname"$0"}/.."


echo "\nSetting up project...\n"
echo "\nClearing cache ....\n"
php artisan clear
# chmod u+x YourScript.sh
php artisan clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "\n Installing dependencies ....\n"
composer intall --no-interaction
# npm install

# Create .env file if not exist
if[ -f "$PATH_BASE/.env"]
then
    echo "\n.env file already exists\n"
else
    echo "\nCreating .env file\n"
    cp .env.example .env
fi
