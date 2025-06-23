<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mobile_activation_api}}`.
 */
class m250623_161241_create_mobile_activation_api_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mobile_activation_api}}', [
            'id' => $this->primaryKey(),
            'auth_id' => $this->string(50),
            'cad' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(10),
            'passcode' => $this->string(20),
            'pmt_ref_no' => $this->string(20),
            'send_type' => $this->string(20),
            'timestamp' => $this->string(50),
            'type' => $this->string(50),
            'wallet_type' => $this->string(50),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mobile_activation_api}}');
    }
}
