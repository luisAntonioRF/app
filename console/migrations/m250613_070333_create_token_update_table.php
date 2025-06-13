<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%token_update}}`.
 */
class m250613_070333_create_token_update_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%token_update}}', [
            'id' => $this->primaryKey(),
            'cad' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'result' => $this->string(100),
            'timestamp' => $this->string(50),
            'token_action' => $this->string(100),
            'type' => $this->string(100),
            'xid' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%token_update}}');
    }
}
