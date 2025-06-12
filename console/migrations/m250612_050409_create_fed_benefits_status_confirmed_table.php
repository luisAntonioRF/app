<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%fed_benefits_status_confirmed}}`.
 */
class m250612_050409_create_fed_benefits_status_confirmed_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%fed_benefits_status_confirmed}}', [
            'id' => $this->primaryKey(),
            'balance_id' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'fbe_status_id' => $this->string(50),
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
        $this->dropTable('{{%fed_benefits_status_confirmed}}');
    }
}
