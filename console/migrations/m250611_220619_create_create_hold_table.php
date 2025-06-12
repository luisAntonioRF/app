<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%create_hold}}`.
 */
class m250611_220619_create_create_hold_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%create_hold}}', [
            'id' => $this->primaryKey(),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'currency' => $this->string(20),
            'description' => $this->string(255),
            'expiry_dt' => $this->dateTime(6),
            'hold_amount' => $this->decimal(12,2),
            'hold_id' => $this->string(50),
            'hold_source' => $this->string(50),
            'hold_type' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'timestamp' => $this->string(50),
             'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%create_hold}}');
    }
}
