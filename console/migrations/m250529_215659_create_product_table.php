<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m250529_215659_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
        'id' => $this->primaryKey(),
        'name' => $this->string()->notNull(),
        'price' => $this->decimal(10, 2)->notNull(),
        'created_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
