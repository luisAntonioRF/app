<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%card_shipped}}`.
 */
class m250612_193023_create_card_shipped_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%card_shipped}}', [
            'id' => $this->primaryKey(),
            'addr1' => $this->string(100),
            'addr2' => $this->string(100),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->string(50),
            'ch_group_id' => $this->string(50),
            'city' => $this->string(100),
            'credit_balance' => $this->decimal(12,2),
            'emboss_expiry_date' => $this->dateTime(6),
            'emboss_uuid' => $this->string(100),
            'fname' => $this->string(100),
            'is_emboss_reissue' => $this->string(50),
            'lname' => $this->string(100),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'protected_pan_four' => $this->string(5),
            'ship_type' => $this->string(100),
            'shipto_name' => $this->string(100),
            'state' => $this->string(50),
            'timestamp' => $this->string(50),
            'type' => $this->string(100),
            'user_data' => $this->string(255),
            'xid' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%card_shipped}}');
    }
}
