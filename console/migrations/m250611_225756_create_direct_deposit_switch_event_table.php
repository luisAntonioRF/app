<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%direct_deposit_switch_event}}`.
 */
class m250611_225756_create_direct_deposit_switch_event_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%direct_deposit_switch_event}}', [
            'id' => $this->primaryKey(),
            'ch_group_id' => $this->integer(11),
            'company_payroll_provider_name' => $this->string(50),
            'distribution_amount' => $this->decimal(12, 2),
            'distribution_type' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'status' => $this->string(50),
            'status_reason' => $this->string(50),
            'task' => $this->string(50),
            'timestamp' => $this->string(50),
            'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%direct_deposit_switch_event}}');
    }
}
