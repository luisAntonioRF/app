<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%greendot_auth_commit_fail}}`.
 */
class m250602_233334_create_greendot_auth_commit_fail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%greendot_auth_commit_fail}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(12,2),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'card_id' => $this->integer(10),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'description' => $this->string(50),
            'ext_payment_type' => $this->string(1),
            'limit_code' => $this->string(10),
            'limit_id' => $this->integer(10),
            'merchant_id' => $this->string(20),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'otype' => $this->string(3),
            'partner' => $this->string(50),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'retail_chain' => $this->string(50),
            'retail_sale_transaction_key' => $this->string(50),
            'store_address1' => $this->string(50),
            'store_address2' => $this->string(50),
            'store_city' => $this->string(50),
            'store_county' => $this->string(50),
            'store_latitude' => $this->string(50),
            'store_longitude' => $this->string(50),
            'store_name' => $this->string(50),
            'store_number' => $this->integer(10),
            'store_state' => $this->string(2),
            'store_transaction_date' => $this->dateTime(6),
            'store_zipcode' => $this->integer(6),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%greendot_auth_commit_fail}}');
    }
}
