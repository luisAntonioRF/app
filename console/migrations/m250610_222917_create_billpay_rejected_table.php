<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billpay_rejected}}`.
 */
class m250610_222917_create_billpay_rejected_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billpay_rejected}}', [
            'id' => $this->primaryKey(),
            'balance_id' => $this->integer(11),
            'billpay_id' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'rjreason' => $this->string(50),
            'rpssamt' => $this->decimal(12,2),
            'rpssbiller' => $this->string(50),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%billpay_rejected}}');
    }
}
