# IMAF Yii2 Starter Kit

1 git clone https://github.com/Muxtorov98/yii2advanced.git

2 php composer.phar install || php composer.phar install --ignore-platform-reqs

3 php init 

4 common/config/main-local.php/ 

<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2db',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => true,
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        ]
    ],
];

5 php yii migrate

6 php yii migrate --migrationPath=@yii/i18n/migrations/

7 php composer.phar require mdmsoft/yii2-admin "~2.0"

8 php yii migrate --migrationPath=@yii/rbac/migrations/



cc