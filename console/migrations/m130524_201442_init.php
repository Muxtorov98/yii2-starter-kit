<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'role_id' => $this->string(),
            'is_admin' => $this->integer(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        
         $this->insert('{{%user}}', [
            'username' => 'Tulqin',
            'auth_key' => \Yii::$app->security->generateRandomString(20),
            'password_hash' => \Yii::$app->security->generatePasswordHash("12345"),
            'password_reset_token' => null,
          //  'access_token' => \Yii::$app->security->generateRandomString(),
          //  'access_token_time' => time(),
            'email' => 'tulqin@gmail.com',
            'role_id' => 'su_admin',
            'is_admin' => 1,
            'status' => 10,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
