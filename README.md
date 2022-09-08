# IMAF Yii2 Starter Kit
## _Starting Guide_
## 1. Make migrattion
```sh  
```
1 git clone https://github.com/Muxtorov98/yii2advanced.git

2 php composer.phar install || php composer.phar install --ignore-platform-reqs

3 php init 

4 db  common/config/main-local.php/   'dsn' => 'mysql:host=localhost;dbname=yii2db',

5 php yii migrate

6 php yii migrate --migrationPath=@yii/i18n/migrations/

ok 
