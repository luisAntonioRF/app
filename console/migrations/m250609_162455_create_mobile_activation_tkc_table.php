<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mobile_activation_tkc}}`.
 */
class m250609_162455_create_mobile_activation_tkc_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mobile_activation_tkc}}', [
            'id' => $this->primaryKey(),
            'auth_id' => $this->integer(11),
            'cad' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(2),
            'pmt_ref_no' => $this->string(20),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(100),
            'wallet_type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mobile_activation_tkc}}');
    }
}
