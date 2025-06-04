<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auth_exp}}`.
 */
class m250603_195308_create_auth_exp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auth_exp}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(3)->notNull(),
            'amount' => $this->decimal(12,2),
            'auth_id' => $this->integer(11),
            'auth_tran_type' => $this->string(40),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'billing_amt' => $this->decimal(12,2),
            'billing_curr_code' => $this->string(20),
            'cad' => $this->integer(11),
            'cashback_amount' => $this->decimal(12,2),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'credit_ind' => $this->string(3),
            'currency' => $this->string(3),
            'de003' => $this->string(10),
            'de022' => $this->string(10),
            'domestic' => $this->string(1),
            'fund_pastotb_adj' => $this->decimal(12,2),
            'fund_pmt_ref_no' => $this->string(20),
            'latest_incremental_id' => $this->string(20),
            'local_currency' => $this->string(3),
            'local_currency_amount' => $this->decimal(12,2),
            'local_surcharge_amt' => $this->decimal(12,2),
            'mcc' => $this->string(20),
            'merchant' => $this->string(50),
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
            'otype' => $this->string(3),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'risk_score' => $this->integer(11),
            'settle_currency' => $this->string(3),
            'settle_currency_amount' => $this->decimal(12,2),
            'timestamp' => $this->dateTime(6),
            'tlid' => $this->string(20),
            'token_type' => $this->string(50),
            'type' => $this->string(10),
            'user_data' => $this->string(20),
            'visa_trans_id' => $this->string(20),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%auth_exp}}');
    }
}
