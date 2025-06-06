<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%atm_issuer_fee_inquiry}}`.
 */
class m250605_234141_create_atm_issuer_fee_inquiry_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%atm_issuer_fee_inquiry}}', [
            'id' => $this->primaryKey(),
            'act_type' => $this->string(3)->notNull(),
            'amount' => $this->decimal(12,2),
            'auth_id' => $this->integer(11),
            'auth_id_response' => $this->string(40),
            'auth_tran_type' => $this->string(40),
            'balance_id' => $this->integer(11),
            'cad' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'currency' => $this->string(3),
            'issuer_fee_amt' => $this->decimal(12,2),
            'issuer_fee_inquiry_status' => $this->string(10),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(2),
            'open_to_buy' => $this->decimal(12,2),
            'original_auth_id' => $this->string(20),
            'otype' => $this->string(3),
            'pmt_ref_no' => $this->string(20),
            'pos_data_trans_status' => $this->integer(2),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'timestamp' => $this->dateTime(6),
            'tlid' => $this->string(20),
            'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%atm_issuer_fee_inquiry}}');
    }
}
