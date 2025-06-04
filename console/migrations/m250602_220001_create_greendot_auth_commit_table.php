<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%greendot_auth_commit}}`.
 */
class m250602_220001_create_greendot_auth_commit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%greendot_auth_commit}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(3)->notNull(),
            'amount' => $this->decimal(12,2),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'confirmation_id' => $this->string(20),
            'credit_balance' => $this->decimal(12,2),
            'description' => $this->string(50),
            'ext_payment_type' => $this->string(1),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'open_to_buy' => $this->decimal(12,2),
            'otype' => $this->string(3),
            'partner' => $this->string(50),
            'pmt_id' => $this->integer(10),
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
        $this->dropTable('{{%greendot_auth_commit}}');
    }
}
