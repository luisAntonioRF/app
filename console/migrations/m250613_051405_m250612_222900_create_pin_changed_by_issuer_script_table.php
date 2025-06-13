<?php

use yii\db\Migration;

class m250613_051405_m250612_222900_create_pin_changed_by_issuer_script_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%pin_changed_by_issuer_script}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(3),
            'amount' => $this->decimal(12,2),
            'auth_id' => $this->string(50),
            'auth_id_response' => $this->string(40),
            'auth_tran_type' => $this->string(10),
            'balance_id' => $this->integer(11),
            'cad' => $this->string(50),
            'currency' => $this->string(10),
            'issuer_script_status' => $this->string(100),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(50),
            'open_to_buy' => $this->decimal(12,2),
            'otype' => $this->string(3),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'timestamp' => $this->string(50),
            'type' => $this->string(100),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%pin_changed_by_issuer_script}}');
    }
}
