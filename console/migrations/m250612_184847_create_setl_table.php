<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%setl}}`.
 */
class m250612_184847_create_setl_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%setl}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(10),
            'amount' => $this->decimal(12,2),
            'atm_fee' => $this->decimal(12,2),
            'auth_id' => $this->string(50),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'billing_amt' => $this->decimal(12,2),
            'billing_curr_code' => $this->string(50),
            'bookkeeping_auth_id' => $this->string(50),
            'cad' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'client_id' => $this->string(50),
            'credit_balance' => $this->decimal(12,2),
            'currency' => $this->string(10),
            'de022' => $this->string(50),
            'de063' => $this->string(50),
            'de39' => $this->string(50),
            'driver_number' => $this->string(50),
            'expired_auth_id' => $this->string(50),
            'fund_pastotb_adj' => $this->decimal(12,2),
            'fund_pmt_ref_no' => $this->string(50),
            'interchange_fee' => $this->decimal(12,6),
            'local_currency' => $this->string(10),
            'local_currency_amount' => $this->decimal(12,2),
            'mc_installment_detail' => $this->string(50),
            'mcc' => $this->string(10),
            'merchant' => $this->string(100),
            'merchant_country_code' => $this->string(20),
            'merchant_location' => $this->string(100),
            'merchant_name' => $this->string(100),
            'merchant_number' => $this->string(100),
            'merchant_postal_code' => $this->integer(5),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'multi_count' => $this->integer(),
            'multi_number' => $this->integer(),
            'network' => $this->string(10),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'original_auth_id' => $this->string(100),
            'original_incremental_id' => $this->string(100),
            'original_multiclearing_auth_id' => $this->string(100),
            'otype' => $this->string(50),
            'pds0180' => $this->string(100),
            'pmt_ref_no' => $this->string(20),
            'post_date' => $this->string(50),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'rate_date' => $this->dateTime(6),
            'rate_id' => $this->string(50),
            'rate_value' => $this->decimal(12,2),
            'remaining_amount' => $this->decimal(12,2),
            'response_code' => $this->string(50),
            'rrn' => $this->string(50),
            'settle_currency' => $this->string(50),
            'settle_currency_amount' => $this->decimal(12,2),
            'settle_detail_id' => $this->string(50),
            'signed_amount' => $this->decimal(12, 2),
            'timestamp' => $this->string(50),
            'type' => $this->string(100),
            'usd_amt' => $this->decimal(12,2),
            'user_data' => $this->string(255),
            'vehicle_number' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%setl}}');
    }
}
