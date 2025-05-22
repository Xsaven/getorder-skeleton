### Installation
To install the skeleton, you can use the following command:
```bash
curl -fsSL 'https://raw.githubusercontent.com/Xsaven/getorder-skeleton/master/install.sh' | \
  NODE_NAME=my-node \
  APP_URL=https://my-node.dev \
  DB_USERNAME=root \
  DB_PASSWORD=root \
  APP_URL_PROD=https://my-node.getorder.biz \
  DB_USERNAME_PROD= \
  DB_PASSWORD_PROD= \
  JWT_SECRET=QWERTYSECRET \
  bash
```

