<?php

use yii\db\Migration;

class m250613_055224_m250612_222910_create_phone_changed_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%phone_changed}}', [
            'id' => $this->primaryKey(),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->string(50),
            'carrier_id' => $this->integer(),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'firstname' => $this->string(100),
            'home_phone' => $this->string(15),
            'mobile_phone' => $this->string(15),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'old_home_phone' => $this->string(15),
            'old_mobile_phone' => $this->string(15),
            'old_other_phone' => $this->string(15),
            'open_to_buy' => $this->decimal(12,2),
            'other_phone' => $this->string(15),
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
        $this->dropTable('{{%phone_changed}}');
    }
}
