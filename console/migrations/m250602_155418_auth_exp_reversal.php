<?php

use yii\db\Migration;

class m250602_155418_auth_exp_reversal extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auth_exp_reversal}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(12, 2),
            'auth_id' => $this->integer(11),
            'auth_tran_type' => $this->integer(40),
            'avail_cash' => $this->decimal(12, 2),
            'avail_credit' => $this->decimal(12, 2),
            'balance_id' => $this->integer(11),
            'billing_amt' => $this->decimal(12,2),
            'billing_curr_code' => $this->string(20),
            'cad' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'currency' => $this->string(3),
            'fund_pastotb_adj' => $this->decimal(12,2),
            'fund_pmt_ref_no' => $this->string(20),
            'latest_incremental_id' => $this->string(20),
            'local_surcharge_amt' => $this->decimal(12, 2),
            'mcc' => $this->string(20),
            'merchant_location' => $this->string(50),
            'merchant_name' => $this->string(50),
            'merchant_number' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(2),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'original_auth_id' => $this->string(20),
            'original_incremental_id' => $this->string(20),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'timestamp' => $this->dateTime(6),
            'tlid' => $this->string(20),
            'type' => $this->string(50),
            'visa_trans_id' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%auth_exp_reversal}}');
    }

}
