<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ach_credit_fail}}`.
 */
class m250605_183057_create_ach_credit_fail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ach_credit_fail}}', [
            'id' => $this->primaryKey(),
            'ach_source_trace' => $this->string(100),
            'amount' => $this->decimal(12,2),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'batch_header' => $this->string(255),
            'cad' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'return_code' => $this->string(3),
            'source' => $this->string(100),
            'source_id' => $this->integer(10),
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
        $this->dropTable('{{%ach_credit_fail}}');
    }
}
