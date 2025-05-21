#!/bin/bash

NODE_NAME=${1:-my-node}
REPO_URL="https://home.timc.biz/getorder/core/skeleton.git"

composer create-project getorder/skeleton "$NODE_NAME" \
  --repository="{\"type\":\"vcs\",\"url\":\"$REPO_URL\"}" \
  --stability=dev
cd "$NODE_NAME" || exit 1
composer install
composer dump-autoload
git init
