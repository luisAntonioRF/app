<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%case_created}}`.
 */
class m250611_222120_create_case_created_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%case_created}}', [
            'id' => $this->primaryKey(),
            'case_no' => $this->string(50),
            'case_notice_date' => $this->dateTime(6),
            'case_rege_date' => $this->dateTime(6),
            'ch_group_id' => $this->integer(11),
            'dispute_count' => $this->integer(),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'timestamp' => $this->string(50),
            'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%case_created}}');
    }
}
