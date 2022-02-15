<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%publisher}}`.
 */
class m220215_042142_create_publisher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%publisher}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->unique()->notNull(),
            'address' => $this->string(500),
            'status' => $this->integer()->defaultValue(0),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%publisher}}');
    }
}
