<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mobile_activation_acn}}`.
 */
class m250605_010623_create_mobile_activation_acn_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mobile_activation_acn}}', [
            'id' => $this->primaryKey(),
            'activation_code' => $this->integer(10),
            'auth_id' => $this->integer(11),
            'cad' => $this->integer(11),
            'ch_group_id' => $this->integer(11),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(2),
            'pmt_ref_no' => $this->string(20),
            'send_type' => $this->string(100),
            'timestamp' => $this->dateTime(6),
            'type' => $this->string(10),
            'wallet_type' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mobile_activation_acn}}');
    }
}
