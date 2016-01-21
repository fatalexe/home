#!/bin/bash
sudo chcon -Rt svirt_sandbox_file_t ericseyden.com
sudo chcon -Rt svirt_sandbox_file_t fatalexe.com
sudo chcon -Rt svirt_sandbox_file_t seyden.net
sudo chcon -Rt svirt_sandbox_file_t html
cd seyden.net
sudo chmod -R 777 storage
composer install
cp .env.example .env
php artisan key:generate
cd ..