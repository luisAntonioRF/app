<?php

use yii\db\Migration;

class m250605_011829_update_type_length_in_mobile_activation_acn extends Migration
{
   /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%mobile_activation_acn}}', 'type', $this->string(100));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%mobile_activation_acn}}', 'type', $this->string(10));
    }
}
