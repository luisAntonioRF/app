<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%fee}}`.
 */
class m250609_222446_create_fee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%fee}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(3),
            'amount' => $this->decimal(12,2),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'client_id' => $this->string(40),
            'credit_balance' => $this->decimal(12,2),
            'description' => $this->string(100),
            'ext_trans_id' => $this->string(100),
            'fee_auth' => $this->string(50),
            'fee_event_id' => $this->string(50),
            'fee_id' => $this->string(50),
            'merchant_number' => $this->string(100),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'otype' => $this->string(20),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'sign_amount' => $this->string(50),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(100),
            'user_data' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%fee}}');
    }
}
