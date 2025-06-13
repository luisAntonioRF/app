<?php

use yii\db\Migration;

class m250613_060952_m250612_222920_create_pin_changed_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%pin_changed}}', [
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
           'user_data' => $this->string(100),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%pin_changed}}');
    }
}
