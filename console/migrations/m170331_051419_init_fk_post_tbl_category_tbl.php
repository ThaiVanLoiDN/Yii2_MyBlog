<?php

use yii\db\Migration;

class m170331_051419_init_fk_post_tbl_category_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("post_tbl_category_tb", 'post', 'category_id', 'category', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        echo "m170331_051419_init_fk_post_tbl_category_tbl cannot be reverted.\n";

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
