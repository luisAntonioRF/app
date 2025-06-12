<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%expire_hold}}`.
 */
class m250612_004152_create_expire_hold_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%expire_hold}}', [
            'id' => $this->primaryKey(),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'currency' => $this->string(20),
            'description' => $this->string(100),
            'expiring_hold_system' => $this->string(50),
            'expiring_hold_user' => $this->string(50),
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
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%expire_hold}}');
    }
}
