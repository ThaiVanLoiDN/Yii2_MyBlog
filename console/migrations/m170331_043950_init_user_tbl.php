<?php

use yii\db\Migration;

class m170331_043950_init_user_tbl extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'fullname' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'avatar' => $this->string(50)->notNull(),
            'role' => $this->smallInteger()->notNull()->defaultValue(2),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            
            'updated_at' => $this->timestamp(),
            'created_at' => $this->timestamp() . ' DEFAULT NOW()',
            'is_deleted' => $this->boolean()->defaultValue(false),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
