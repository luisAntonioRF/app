<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lost_stolen_card_with_replacement}}`.
 */
class m250612_063433_create_lost_stolen_card_with_replacement_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lost_stolen_card_with_replacement}}', [
            'id' => $this->primaryKey(),
            'avail_cash' => $this->decimal(12,2),
            'avail_credit' => $this->decimal(12,2),
            'balance_id' => $this->integer(11),
            'cad' => $this->string(50),
            'ch_group_id' => $this->integer(11),
            'credit_balance' => $this->decimal(12,2),
            'msg_event_id' => $this->string(20),
            'msg_id' => $this->string(5),
            'new_emboss_uuid' => $this->string(255),
            'open_to_buy' => $this->decimal(12,2),
            'pmt_ref_no' => $this->string(20),
            'prod_id' => $this->integer(11),
            'prog_id' => $this->integer(11),
            'protected_pan_four' => $this->integer(5),
            'timestamp' => $this->string(50),
            'type' => $this->string(100),
            'user_data' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lost_stolen_card_with_replacement}}');
    }
}
