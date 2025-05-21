#!/bin/bash

NODE_NAME=${NODE_NAME:-my-node}
REPO_URL="git@github.com:Xsaven/getorder-skeleton.git"

composer create-project getorder/skeleton "$NODE_NAME" \
  --repository="{\"type\":\"vcs\",\"url\":\"$REPO_URL\"}" \
  --stability=dev
cd "$NODE_NAME" || exit 1
composer install
composer dump-autoload
git init
php artisan microservice:prepare-stubs
php artisan microservice:prepare-name "$NODE_NAME"
read -rp "Введіть JWT сікрет (або залешіть пусти для автогенерації): " JWT_SECRET
php artisan microservice:prepare-jwt-secret "$JWT_SECRET"
