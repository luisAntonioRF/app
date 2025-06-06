<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ach_return}}`.
 */
class m250605_192755_create_ach_return_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ach_return}}', [
            'id' => $this->primaryKey(),
            'ach_acct_id' => $this->string(100),
            'ach_proc_id' => $this->string(100),
            'ach_trans_id' => $this->string(100),
            'amount' => $this->decimal(12,2),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'description' => $this->string(255),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'otype' => $this->string(3),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'receiver_name' => $this->string(100),
            'return_code' => $this->string(3),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ach_return}}');
    }
}
