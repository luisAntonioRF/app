<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ach_credit_return}}`.
 */
class m250612_045404_create_ach_credit_return_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ach_credit_return}}', [
            'id' => $this->primaryKey(),
            'ach_source_trace' => $this->string(100),
            'ach_trans_id' => $this->string(50),
            'amount' => $this->decimal(12,2),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'ext_trans_id' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'payment_id' => $this->string(50),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'receiver_name' => $this->string(100),
            'return_code' => $this->string(50),
            'timestamp' => $this->string(50),
            'type' => $this->string(100),
            'user_data' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ach_credit_return}}');
    }
}
