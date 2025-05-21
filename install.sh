#!/bin/bash

NODE_NAME=${NODE_NAME:-my-node}
REPO_URL="git@github.com:Xsaven/getorder-skeleton.git"

composer create-project getorder/skeleton "$NODE_NAME" \
  --repository="{\"type\":\"vcs\",\"url\":\"$REPO_URL\"}" \
  --stability=dev
