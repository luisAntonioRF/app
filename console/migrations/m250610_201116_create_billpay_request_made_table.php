<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billpay_request_made}}`.
 */
class m250610_201116_create_billpay_request_made_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billpay_request_made}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(3),
            'amount' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'billername' => $this->string(100),
            'billpay_id' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'description' => $this->string(100),
            'merchant_number' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
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
        $this->dropTable('{{%billpay_request_made}}');
    }
}
