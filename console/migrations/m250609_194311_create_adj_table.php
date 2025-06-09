<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%adj}}`.
 */
class m250609_194311_create_adj_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%adj}}', [
            'id' => $this->primaryKey(),
            'account_status' => $this->string(10),
            'ach_acct_id' => $this->string(50),
            'ach_source_trace' => $this->string(50),
            'ach_trans_id' => $this->string(50),
            'act_type' => $this->string(2),
            'adj_id' => $this->string(20),
            'amount' => $this->decimal(12,2),
            'association_name' => $this->string(10),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'batch_header' => $this->string(255),
            'cad' => $this->integer(11),
            'card_status' => $this->string(10),
            'ch_group_id' => $this->integer(11),
            'client_id' => $this->string(40),
            'company_entry_desc' => $this->string(40),
            'credit_balance' => $this->decimal(12,2),
            'currency' => $this->decimal(12,2),
            'description' => $this->string(100),
            'ext_trans_id' => $this->string(255),
            'mcc' => $this->string(20),
            'merchant_country_code' => $this->string(10),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'odfi_routing_number' => $this->string(20),
            'open_to_buy' => $this->decimal(12,2),
            'opentobuy_ts' => $this->dateTime(6),
            'orig_acct_number' => $this->string(20),
            'orig_name' => $this->string(100),
            'otype' => $this->string(3),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'receiver_name' => $this->string(20),
            'sec_code' => $this->string(10),
            'settle_dtl_id' => $this->string(20),
            'settle_julian_date' => $this->string(20),
            'source_id' => $this->string(50),
            'source_inst_name' => $this->string(50),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(100),
            'user_data' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%adj}}');
    }
}
