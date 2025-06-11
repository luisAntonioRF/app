<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pmt_split}}`.
 */
class m250610_225258_create_pmt_split_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pmt_split}}', [
            'id' => $this->primaryKey(),
            'ach_trans_id' => $this->string(50),
            'act_type' => $this->string(10),
            'amount' => $this->decimal(12,2),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'description' => $this->string(100),
            'ext_trans_id' => $this->string(50),
            'hold_days' => $this->string(10),
            'immed_amt' => $this->decimal(12,2),
            'later_amt' => $this->decimal(12,2),
            'merchant_name' => $this->string(100),
            'merchant_number' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'otype' => $this->string(20),
            'pmt_id' => $this->string(50),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'source_id' => $this->string(50),
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
        $this->dropTable('{{%pmt_split}}');
    }
}
