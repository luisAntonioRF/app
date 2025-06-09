<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pmt_delayed}}`.
 */
class m250609_221148_create_pmt_delayed_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pmt_delayed}}', [
            'id' => $this->primaryKey(),
            'ach_trans_id' => $this->string(20),
            'act_type' => $this->string(3),
            'amount' => $this->decimal(12,2),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'description' => $this->string(100),
            'ext_trans_id' => $this->string(100),
            'merchant_name' => $this->string(100),
            'merchant_number' => $this->string(100),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'otype' => $this->string(3),
            'pmt_id' => $this->string(20),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
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
        $this->dropTable('{{%pmt_delayed}}');
    }
}
