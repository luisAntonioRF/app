<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auth_api_timeout}}`.
 */
class m250603_224441_create_auth_api_timeout_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auth_api_timeout}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(3)->notNull(),
            'amount' => $this->decimal(12,2),
            'auth_id' => $this->integer(11),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'latest_incremental_id' => $this->string(20),
            'mcc' => $this->string(20),
            'merchant_location' => $this->string(50),
            'merchant_name' => $this->string(50),
            'merchant_number' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(2),
            'open_to_buy' => $this->decimal(12,2),
            'original_auth_id' => $this->string(20),
            'original_incremental_id' => $this->string(20),
            'otype' => $this->string(3),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'response_code' => $this->string(2),
            'response_reasons' => $this->string(50),
            'timestamp' => $this->dateTime(6),
            'tlid' => $this->string(20),
            'type' => $this->string(10),
            'visa_trans_id' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%auth_api_timeout}}');
    }
}
