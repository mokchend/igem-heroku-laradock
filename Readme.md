Clone from : https://github.com/igemwaseda/igem-heroku

# Demonstrate how to use laradock with laravel source used to be deployed on heroku
## Dockerize your environment
```
cd laradock
cp env-example .env
vim .env
APP_CODE_PATH_HOST=../src
```

## Laravel projet configuration
* to connect to docker environmennt : phpMyAdmin http://localhost:8080/ (root/root)
* Create the homestead database
```
cd src
cp .env.example .env
vim .env

#Heroku
CLEARDB_DATABASE_URL=mysql://root:root@mysql

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=root
```
* composer update
* php artisan migrate

# Original project

# IGEM ウェブサイト開発
Outline
  - Installation
  - Setup
  - Attention

# Installation
 ```
 git clone --recursive https://github.com/igemwaseda/igem-heroku.git
 cd igem-heroku
 vim .git/config 　# delete line 7 ([submodule]) and 8 (active = .)
 rm -rf laradock
 git rm --cached laradock
 git submodule add https://github.com/laradock/laradock.git
 ```

 # Setup
 ```
 ~/laradock/
 cp env-example .env
 vim .env
 APP_CODE_PATH_HOST=../src
 MYSQL_VERSION=5.5

 docker-compose up -d workspace nginx mysql phpmyadmin
 curl localhost
 ```

# Attention
Please change mysql version into the current one on heroku server.
```
vim ~/laradock/mysql/Dockerfile
ARG MYSQL_VERSION=5.5
```

If you want to use heroku command in workspace container, you can add the following script in Dockerfile. The script automatically installs heroku command when you build the  workspace container.
```
vim ~/laradock/workspace/Dockerfile
#######################################################################
# install heroku command: 
#######################################################################
RUN curl https://cli-assets.heroku.com/install.sh | sh
```
