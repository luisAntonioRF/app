<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%account_feature_change}}`.
 */
class m250605_170025_create_account_feature_change_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account_feature_change}}', [
            'id' => $this->primaryKey(),
            'ch_group_id' => $this->integer(11),
            'current' => $this->string(1),
            'feature_type' => $this->integer(10),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'pmt_ref_no' => $this->string(20),
            'previous' => $this->string(1),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%account_feature_change}}');
    }
}
