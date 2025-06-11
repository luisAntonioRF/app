<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billpay_switch_event}}`.
 */
class m250610_221923_create_billpay_switch_event_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billpay_switch_event}}', [
            'id' => $this->primaryKey(),
            'account_type' => $this->string(100),
            'ch_group_id' => $this->integer(11),
            'company' => $this->string(100),
            'lastfour' => $this->integer(5),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'payment_type' => $this->string(100),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'routing_number' => $this->string(50),
            'status' => $this->string(50),
            'status_reason' => $this->string(100),
            'task' => $this->string(100),
            'timestamp' => $this->dateTime(6),
            'title' => $this->string(100),
            'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%billpay_switch_event}}');
    }
}
