<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billpay_check_cleared}}`.
 */
class m250610_193702_create_billpay_check_cleared_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billpay_check_cleared}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(3),
            'amount' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'billpay_id' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'cleared_date' => $this->string(50),
            'description' => $this->string(100),
            'merchant_number' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'original_balance_id' => $this->string(50),
            'original_prn' => $this->string(50),
            'otype' => $this->string(20),
            'pmt_ref_no' => $this->string(20),
            'proc_date' => $this->string(50),
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
        $this->dropTable('{{%billpay_check_cleared}}');
    }
}
