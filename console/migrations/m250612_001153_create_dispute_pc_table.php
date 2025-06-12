<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dispute_pc}}`.
 */
class m250612_001153_create_dispute_pc_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dispute_pc}}', [
            'id' => $this->primaryKey(),
            'case_no' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'dispute_amount' => $this->decimal(12,2),
            'dispute_id' => $this->string(50),
            'dispute_notice_date' => $this->dateTime(6),
            'dispute_pc_amount' => $this->decimal(12,2),
            'dispute_rege_date' => $this->dateTime(6),
            'ext_dispute_id' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(50),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'settle_detail_id' => $this->string(50),
            'timestamp' => $this->string(50),
            'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dispute_pc}}');
    }
}
