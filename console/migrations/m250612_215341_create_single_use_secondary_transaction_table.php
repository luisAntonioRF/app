<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%single_use_secondary_transaction}}`.
 */
class m250612_215341_create_single_use_secondary_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%single_use_secondary_transaction}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(12,2),
            'auth_id' => $this->string(50),
            'auth_tran_type' => $this->string(10),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->string(50),
            'cashback_amount' => $this->decimal(12,2),
            'ch_group_id' => $this->integer(11),
            'client_id' => $this->string(10),
            'credit_balance' => $this->decimal(12,2),
            'credit_ind' => $this->string(10),
            'currency' => $this->string(10),
            'de003' => $this->string(50),
            'de022' => $this->string(50),
            'de39' => $this->string(50),
            'domestic' => $this->string(50),
            'fee_amt' => $this->decimal(12,2),
            'fund_pmt_ref_no' => $this->string(100),
            'latest_incremental_id' => $this->string(100),
            'local_currency' => $this->string(10),
            'local_currency_amount' => $this->decimal(12,2),
            'local_surcharge_amt' => $this->decimal(12,2),
            'mcc' => $this->string(50),
            'merchant' => $this->string(50),
            'merchant_location' => $this->string(50),
            'merchant_name' => $this->string(50),
            'merchant_number' => $this->string(50),
            'merchant_postal_code' => $this->integer(6),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(50),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'original_auth_id' => $this->string(50),
            'original_incremental_id' => $this->string(50),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'response_code' => $this->string(50),
            'response_reasons' => $this->string(100),
            'risk_score' => $this->integer(),
            'rules_results' => $this->string(100),
            'settle_currency' => $this->string(10),
            'settle_currency_amount' => $this->decimal(12,2),
            'sign_amount' => $this->string(10),
            'timestamp' => $this->string(50),
            'tlid' => $this->string(50),
            'token_requester' => $this->string(50),
            'token_requester_id' => $this->string(50),
            'token_type' => $this->string(50),
            'type' => $this->string(100),
            'user_data' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%single_use_secondary_transaction}}');
    }
}
