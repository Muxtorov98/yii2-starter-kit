# IMAF Yii2 Starter Kit

1 git clone https://github.com/Muxtorov98/yii2advanced.git


php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"



2 php composer.phar install || php composer.phar install --ignore-platform-reqs

3 php init 

4 common/config/main-local.php/ 

`

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
`

migratsiya qilish
` php yii migrate`

6 php yii migrate --migrationPath=@yii/i18n/migrations/

7 php composer.phar require mdmsoft/yii2-admin "~2.0"

8 php yii migrate --migrationPath=@yii/rbac/migrations/
