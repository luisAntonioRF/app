<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cardholder_info_changed}}`.
 */
class m250611_135837_create_cardholder_info_changed_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cardholder_info_changed}}', [
            'id' => $this->primaryKey(),
            'addr1' => $this->string(100),
            'addr2' => $this->string(100),
            'balance_id' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'city' => $this->string(100),
            'country' => $this->integer(10),
            'dob' => $this->string(50),
            'email' => $this->string(50),
            'fname' => $this->string(100),
            'home_phone' => $this->string(15),
            'lname' => $this->string(100),
            'mname' => $this->string(50),
            'mobile_phone' => $this->string(15),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'other_phone' => $this->string(15),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'state' => $this->string(5),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(100),
            'zip' => $this->integer(5),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cardholder_info_changed}}');
    }
}
