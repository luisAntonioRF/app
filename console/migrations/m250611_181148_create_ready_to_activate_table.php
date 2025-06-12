<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ready_to_activate}}`.
 */
class m250611_181148_create_ready_to_activate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ready_to_activate}}', [
            'id' => $this->primaryKey(),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
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
        $this->dropTable('{{%ready_to_activate}}');
    }
}
