<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auth_stip_notification}}`.
 */
class m250602_213136_create_auth_stip_notification_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auth_stip_notification}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(12,2),
            'auth_id' => $this->integer(11),
            'auth_tran_type' => $this->string(40),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'billing_amt' => $this->decimal(12,2),
            'cad' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'currency' => $this->string(3),
            'fund_pmt_ref_no' => $this->string(20),
            'is_stip_denial' => $this->string(2),
            'latest_incremental_id' => $this->string(20),
            'local_surcharge_amt' => $this->decimal(12,2),
            'local_atm_surcharge' => $this->decimal(12,2),
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
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'response_code' => $this->string(2),
            'rules_results' => $this->string(20),
            'stip_additional_detail' => $this->string(10),
            'stip_decision' => $this->integer(2),
            'stip_detail' => $this->string(10),
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
        $this->dropTable('{{%auth_stip_notification}}');
    }
}
