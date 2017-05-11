<?php

use yii\db\Migration;

/**
 * Handles adding read_count to table `post`.
 */
class m170413_021453_add_read_count_column_to_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('post', 'read_count', $this->integer()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('post', 'read_count');
    }
}
