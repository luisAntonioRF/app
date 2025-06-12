<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%fee_reversal}}`.
 */
class m250612_054102_create_fee_reversal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%fee_reversal}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(10),
            'amount' => $this->decimal(12,2),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'description' => $this->string(100),
            'ext_trans_id' => $this->string(50),
            'fee_id' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'orig_fee_event_id' => $this->string(50),
            'otype' => $this->string(20),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'timestamp' => $this->string(50),
            'type' => $this->string(50),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%fee_reversal}}');
    }
}
