<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%card_status_change}}`.
 */
class m250611_223316_create_card_status_change_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%card_status_change}}', [
            'id' => $this->primaryKey(),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'exp_date' => $this->string(20),
            'mobile_number' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'new_status' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'protected_pan_four' => $this->integer(10),
            'timestamp' => $this->string(50),
            'type' => $this->string(100),
            'user_data' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%card_status_change}}');
    }
}
