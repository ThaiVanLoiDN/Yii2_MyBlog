<?php

use yii\db\Migration;

class m170331_045508_init_contact_tbl extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%contact}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'subject' => $this->string()->notNull(),
            'body' => $this->text()->notNull(),
            
            'updated_at' => $this->timestamp(),
            'created_at' => $this->timestamp() . ' DEFAULT NOW()',
            'is_deleted' => $this->boolean()->defaultValue(false),
        ], $tableOptions);
    }

    public function down()
    {
        echo "m170331_045508_init_contact_tbl cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
