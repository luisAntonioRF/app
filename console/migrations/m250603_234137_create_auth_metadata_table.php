<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auth_metadata}}`.
 */
class m250603_234137_create_auth_metadata_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auth_metadata}}', [
            'id' => $this->primaryKey(),
            'auth_id' => $this->integer(11),
            'auth_in_request_ts' => $this->dateTime(6),
            'auth_in_response_ts' => $this->dateTime(6),
            'auth_out_request_ts' => $this->dateTime(6),
            'auth_out_response_ts' => $this->dateTime(6),
            'ch_group_id' => $this->integer(11),
            'is_auth_api_fallback' => $this->string(1),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'network' => $this->string(2),
            'pmt_ref_no' => $this->string(20),
            'timestamp' => $this->dateTime(6),
            'total_auth_response_time' => $this->decimal(12,2),
            'type' => $this->string(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%auth_metadata}}');
    }
}
