<?php

use yii\db\Migration;

class m170331_051443_init_fk_post_tbl_user_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_post_tbl_user_tbl", 'post', 'user_id', 'user', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        echo "m170331_051443_init_fk_post_tbl_user_tbl cannot be reverted.\n";

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
