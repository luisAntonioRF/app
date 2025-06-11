<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pmt}}`.
 */
class m250610_214015_create_pmt_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pmt}}', [
            'id' => $this->primaryKey(),
            'account_status' => $this->string(5),
            'ach_acct_id' => $this->string(50),
            'ach_source_trace' => $this->string(50),
            'ach_trans_id' => $this->string(50),
            'act_type' => $this->string(10),
            'amount' => $this->decimal(12,2),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'bai' => $this->string(10),
            'balance_id' => $this->integer(11),
            'batch_header' => $this->string(255),
            'cad' => $this->string(50),
            'card_status' => $this->string(10),
            'ch_group_id' => $this->integer(11),
            'client_id' => $this->string(40),
            'company_entry_desc' => $this->string(100),
            'credit_balance' => $this->decimal(12,2),
            'currency' => $this->decimal(12,2),
            'description' => $this->string(100),
            'effective_dt' => $this->string(50),
            'ext_trans_id' => $this->string(50),
            'extid' => $this->string(50),
            'hold_days' => $this->integer(10),
            'incoming_ach_days_early' => $this->integer(10),
            'mcc' => $this->integer(10),
            'merchant_country_code' => $this->string(10),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'odfi_routing_number' => $this->string(50),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'orig_acct_number' => $this->string(50),
            'orig_name' => $this->string(50),
            'otype' => $this->string(20),
            'payment_rail' => $this->string(50),
            'pmt_id' => $this->string(50),
            'pmt_ref_no' => $this->string(20),
            'pmt_source_id' => $this->string(50),
            'post_date' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'receiver_name' => $this->string(100),
            'reference_id' => $this->string(100),
            'retail_chain' => $this->string(100),
            'sec_code' => $this->string(10),
            'settle_julian_date' => $this->string(10),
            'settle_standard_date' => $this->string(20),
            'source_inst_name' => $this->string(100),
            'timestamp' => $this->dateTime(6),
            'transaction_id' => $this->string(100),
            'type' => $this->string(100),
            'user_data' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pmt}}');
    }
}
