<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%credit_limit_change}}`.
 */
class m250611_142407_create_credit_limit_change_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%credit_limit_change}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'change_ts' => $this->dateTime(6),
            'change_type' => $this->string(5),
            'cred_lim_hist_id' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'reason_code' => $this->integer(10),
            'type' => $this->string(100),
            'user_name' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%credit_limit_change}}');
    }
}
