<?php

use yii\db\Migration;

class m250613_062043_m250612_222930_create_system_pin_change_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%system_pin_change}}', [
            'id' => $this->primaryKey(),
            'balance_id' => $this->integer(11),
            'cad' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'timestamp' => $this->string(50),
            'type' => $this->string(100),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%system_pin_change}}');
    }
}
