#!/usr/bin/env bash

RCol='\e[0m'
Red='\e[0;31m'
Gre='\e[0;32m'
BGre'\e[42m'

printf "Please enter host {localhost}": && read host
printf "Please enter port {3306}": && read port
printf "Please enter database name {homestead}": && read dbname
printf "Please enter database username {root}": && read username
printf "Please enter database password {empty}": && read password


if [ "$host" == "" ]; then host="localhost"

fi

if [ "$port" == "" ]; then host="3306"

fi

if [ "$dbname" == "" ]; then host="homestead"

fi

if [ "$username" == "" ]; then host="root"

fi

echo "Starting installation"

cd ..

cp .env.example .env



sed -i "s/DB_PORT=3306/DB_PORT=$port/g" .env
#sed -i "s/DB_HOST=127.0.0.1/DB_HOST=$host/g" .env &&
#sed -i "s/DB_DATABASE=homestead/DB_DATABASE=$dbname/g" .env &&
#sed -i "s/DB_USERNAME=homestead/DB_USERNAME=$username/g" .env &&
#sed -i "s/DB_PASSWORD=secret/DB_PASSWORD=$password/g" .env &&
#echo -e "${Gre}Finished database information${RCol}" || (echo -e "${Red}Failed to insert database information${RCol}" && exit)

#echo "Git switching to develop"
#(git checkout -b develop || git checkout develop) && echo -e "${Gre}Checkout complete${RCol}" || (echo -e "${Red}Checkout Failed${RCol}" exit)
#echo "Finished switching branch"

#echo "Git pull"
#git pull && echo -e "${Gre}Git pull finished${RCol}" || (echo -e "${Red}Git pull failed${RCol}" exit)

#echo "Installing composer"
#composer install && echo -e "${Gre}Finished installing composer${RCol}" || (echo -e "${Red}Failed to install composer${RCol}" exit)

#echo "Creating new database"
#echo "CREATE DATABASE $dbname" | mysql -h localhost --username $username --password $password&& echo -e "${Gre}Finished creating database${RCol}" || (echo -e "${Red}FAILED${RCol}" exit)

#echo "Generating application key"
#php artisan key:generate
#echo -e "${Gre}Finished generating application key${RCol}"

#echo "Migrate with seeds"
#php artisan migrate:refresh --seed
#echo -e "${Gre}Finished migrate with seeds${RCol}"

#echo "npm install"
#npm install
#echo -e "${Gre}finished npm install${RCol}"

#echo "bower install"
#bower install
#echo -e "${Gre}finished bower install${RCol}"

#echo "GULP"
#gulp
#echo -e "${Gre}finished GULP${RCol}"