<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%unfrozen}}`.
 */
class m250613_071001_create_unfrozen_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%unfrozen}}', [
            'id' => $this->primaryKey(),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'freeze_end_date' => $this->date(),
            'freeze_value' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'new_status' => $this->string(50),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'protected_pan_four' => $this->integer(5),
            'timestamp' => $this->string(50),
            'type' => $this->string(100),
            'user_data' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%unfrozen}}');
    }
}
