<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billpay_request_returned}}`.
 */
class m250610_212133_create_billpay_request_returned_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billpay_request_returned}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'billpay_id' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'description' => $this->string(100),
            'merchant_number' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'original_balance_id' => $this->string(50),
            'original_prn' => $this->string(50),
            'pmt_ref_no' => $this->string(20),
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
        $this->dropTable('{{%billpay_request_returned}}');
    }
}
