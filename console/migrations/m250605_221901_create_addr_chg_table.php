<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%addr_chg}}`.
 */
class m250605_221901_create_addr_chg_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%addr_chg}}', [
            'id' => $this->primaryKey(),
            'addr1' => $this->string(100),
            'addr2' => $this->string(100),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'city' => $this->string(100),
            'credit_balance' => $this->decimal(12,2),
            'email' => $this->string(100),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'old_addr1' => $this->string(100),
            'old_addr2' => $this->string(100),
            'old_city' => $this->string(100),
            'old_email' => $this->string(100),
            'old_state' => $this->string(100),
            'old_zip' => $this->integer(5),
            'open_to_buy' => $this->decimal(12,2),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'state' => $this->string(2),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(100),
            'user_data' => $this->string(20),
            'zip' => $this->integer(5),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%addr_chg}}');
    }
}
