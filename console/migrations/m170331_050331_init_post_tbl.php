<?php

use yii\db\Migration;

class m170331_050331_init_post_tbl extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'image' => $this->string(50),
            'preview' => $this->text()->notNull(),
            'content' => $this->text()->notNull(),
            
            'updated_at' => $this->timestamp(),
            'created_at' => $this->timestamp() . ' DEFAULT NOW()',
            'is_deleted' => $this->boolean()->defaultValue(false),
        ], $tableOptions);
    }

    public function down()
    {
        echo "m170331_050331_init_post_tbl cannot be reverted.\n";

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
