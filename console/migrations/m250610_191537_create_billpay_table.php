<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billpay}}`.
 */
class m250610_191537_create_billpay_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billpay}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(3),
            'adj_id' => $this->string(50),
            'amount' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'billername' => $this->string(3),
            'billpay_id' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'description' => $this->string(100),
            'ext_trans_id' => $this->string(50),
            'merchant_number' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'original_balance_id' => $this->string(50),
            'original_prn' => $this->string(100),
            'otype' => $this->string(5),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'source_id' => $this->string(50),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%billpay}}');
    }
}
