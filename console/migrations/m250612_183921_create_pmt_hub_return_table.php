<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pmt_hub_return}}`.
 */
class m250612_183921_create_pmt_hub_return_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pmt_hub_return}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(12,2),
            'ch_group_id' => $this->integer(11),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'odfi_routing_number' => $this->string(50),
            'orig_acct_number' => $this->string(50),
            'orig_name' => $this->string(100),
            'payment_rail' => $this->string(100),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'receive_ts' => $this->dateTime(6),
            'return_reason' => $this->string(100),
            'source' => $this->string(100),
            'timestamp' => $this->string(100),
            'trans_type' => $this->string(100),
            'transaction_id' => $this->string(100),
            'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pmt_hub_return}}');
    }
}
