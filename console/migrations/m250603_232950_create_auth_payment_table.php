<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auth_payment}}`.
 */
class m250603_232950_create_auth_payment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auth_payment}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(3)->notNull(),
            'amount' => $this->decimal(12,2),
            'auth_id' => $this->integer(11),
            'auth_tran_type' => $this->string(40),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'currency' => $this->string(3),
            'local_surcharge_amt' => $this->decimal(12,2),
            'mcc' => $this->string(20),
            'merchant_location' => $this->string(50),
            'merchant_name' => $this->string(50),
            'merchant_number' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(2),
            'open_to_buy' => $this->decimal(12,2),
            'original_auth_id' => $this->string(20),
            'otype' => $this->string(3),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'response_code' => $this->string(2),
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
        $this->dropTable('{{%auth_payment}}');
    }
}
