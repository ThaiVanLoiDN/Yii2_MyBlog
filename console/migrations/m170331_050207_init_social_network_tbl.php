<?php

use yii\db\Migration;

class m170331_050207_init_social_network_tbl extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%social_network}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'link' => $this->string()->notNull(),
            'class' => $this->string(50)->notNull(),

            'updated_at' => $this->timestamp(),
            'created_at' => $this->timestamp() . ' DEFAULT NOW()',
            'is_deleted' => $this->boolean()->defaultValue(false),
        ], $tableOptions);
    }

    public function down()
    {
        echo "m170331_050207_init_social_network_tbl cannot be reverted.\n";

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
