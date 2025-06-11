<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billpay_limit_violation}}`.
 */
class m250610_163248_create_billpay_limit_violation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billpay_limit_violation}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(12,2),
            'avail_cash' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'billername' => $this->string(100),
            'billpay_id' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'pmt_ref_no' => $this->string(20),
            'proc_time' => $this->dateTime(6),
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
        $this->dropTable('{{%billpay_limit_violation}}');
    }
}
