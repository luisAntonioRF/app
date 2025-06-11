<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%billpay_expired}}`.
 */
class m250610_213011_create_billpay_expired_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%billpay_expired}}', [
            'id' => $this->primaryKey(),
            'billpay_id' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'check_no' => $this->integer(10),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'original_balance_id' => $this->string(50),
            'original_prn' => $this->string(50),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(100),
            'xid' => $this->integer(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%billpay_expired}}');
    }
}
