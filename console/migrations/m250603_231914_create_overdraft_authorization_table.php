<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%overdraft_authorization}}`.
 */
class m250603_231914_create_overdraft_authorization_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%overdraft_authorization}}', [
            'id' => $this->primaryKey(),
            'balance_id' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'od_f_open_to_buy' => $this->decimal(12,2),
            'od_open_to_buy' => $this->decimal(12,2),
            'overdraft_needed' => $this->decimal(12,2),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'source_id' => $this->integer(11),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%overdraft_authorization}}');
    }
}
