<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%denied_auth_bad_pan}}`.
 */
class m250602_194616_create_denied_auth_bad_pan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%denied_auth_bad_pan}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(12,2),
            'auth_id' => $this->integer(11),
            'mcc' => $this->string(20),
            'merchant_location' => $this->string(50),
            'merchant_name' => $this->string(50),
            'merchant_number' => $this->string(50),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(2),
            'response_code' => $this->string(2),
            'timestamp' => $this->dateTime(6),
            'tlid' => $this->string(20),
            'type' => $this->string(10),
            'visa_trans_id' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%denied_auth_bad_pan}}');
    }
}
