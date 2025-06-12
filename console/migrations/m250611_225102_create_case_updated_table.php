<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%case_updated}}`.
 */
class m250611_225102_create_case_updated_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%case_updated}}', [
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
        $this->dropTable('{{%case_updated}}');
    }
}
