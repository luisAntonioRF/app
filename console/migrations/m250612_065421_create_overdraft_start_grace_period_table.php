<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%overdraft_start_grace_period}}`.
 */
class m250612_065421_create_overdraft_start_grace_period_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%overdraft_start_grace_period}}', [
            'id' => $this->primaryKey(),
            'balance_id' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'method' => $this->string(100),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'od_amt' => $this->decimal(12,2),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'timestamp' => $this->string(50),
            'trans_deminimis' => $this->decimal(12, 2),
             'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%overdraft_start_grace_period}}');
    }
}
