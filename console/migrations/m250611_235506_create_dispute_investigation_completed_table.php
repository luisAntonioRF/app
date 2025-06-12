<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dispute_investigation_completed}}`.
 */
class m250611_235506_create_dispute_investigation_completed_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dispute_investigation_completed}}', [
            'id' => $this->primaryKey(),
            'ch_group_id' => $this->integer(11),
            'claim_id' => $this->string(100),
            'claim_reason' => $this->string(100),
            'decision' => $this->string(100),
            'deny_reason' => $this->string(100),
            'dispute_amount' => $this->decimal(12,2),
            'dispute_id' => $this->string(100),
            'investigation_complete_dt' => $this->dateTime(6),
            'legacy_dispute_id' => $this->string(100),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(100),
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
        $this->dropTable('{{%dispute_investigation_completed}}');
    }
}
