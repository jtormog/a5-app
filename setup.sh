#!/bin/bash
cp env .env

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

./vendor/bin/sail up -d
./vendor/bin/sail php artisan key:generate
./vendor/bin/sail php artisan migrate --seed

./vendor/bin/sail npm install -D tailwindcss postcss autoprefixer
./vendor/bin/sail npx tailwindcss init -p

./vendor/bin/sail npm run dev
