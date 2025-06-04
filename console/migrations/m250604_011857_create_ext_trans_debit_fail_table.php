<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ext_trans_debit_fail}}`.
 */
class m250604_011857_create_ext_trans_debit_fail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ext_trans_debit_fail}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'timestamp' => $this->dateTime(6),
            'tp_trans_id' => $this->integer(11),
            'type' => $this->string(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ext_trans_debit_fail}}');
    }
}
