<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%overdraft_suspended}}`.
 */
class m250612_183404_create_overdraft_suspended_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%overdraft_suspended}}', [
            'id' => $this->primaryKey(),
             'balance_id' => $this->integer(11),
             'ch_group_id' => $this->integer(11),
             'msg_event_id' => $this->string(20),
             'msg_id' => $this->string(5),
             'pmt_ref_no' => $this->string(20),
             'prod_id' => $this->integer(11),
             'prog_id' => $this->integer(11),
             'timestamp' => $this->string(50),
             'type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%overdraft_suspended}}');
    }
}
