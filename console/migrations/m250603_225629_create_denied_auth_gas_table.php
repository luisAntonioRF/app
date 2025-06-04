<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%denied_auth_gas}}`.
 */
class m250603_225629_create_denied_auth_gas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%denied_auth_gas}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(12,2),
            'auth_id' => $this->integer(11),
            'auth_tran_type' => $this->string(40),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->integer(11),
            'cashback_amount' => $this->decimal(12,2),
            'ch_group_id' => $this->integer(11),
            'client_id' => $this->string(40),
            'credit_balance' => $this->decimal(12,2),
            'credit_ind' => $this->string(3),
            'currency' => $this->string(3),
            'de003' => $this->string(10),
            'de022' => $this->string(10),
            'domestic' => $this->string(1),
            'fee_amt' => $this->decimal(12,2),
            'fund_pmt_ref_no' => $this->string(20),
            'local_currency' => $this->string(3),
            'local_currency_amount' => $this->decimal(12,2),
            'local_surcharge_amt' => $this->decimal(12,2),
            'mcc' => $this->string(20),
            'merchant_location' => $this->string(50),
            'merchant_name' => $this->string(50),
            'merchant_number' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(2),
            'open_to_buy' => $this->decimal(12,2),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'response_code' => $this->string(2),
            'response_reasons' => $this->string(50),
            'risk_score' => $this->integer(11),
            'rules_results' => $this->string(20),
            'settle_currency' => $this->string(3),
            'settle_currency_amount' => $this->decimal(12,2),
            'sign_amount' => $this->string(50),
            'timestamp' => $this->dateTime(6),
            'tlid' => $this->string(20),
            'token_type' => $this->string(50),
            'type' => $this->string(10),
            'visa_trans_id' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%denied_auth_gas}}');
    }
}
