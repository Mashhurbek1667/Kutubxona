<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%visitor}}`.
 */
class m220215_043721_create_visitor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%visitor}}', [
            'id' => $this->primaryKey(),
            'fullName' => $this->string(),
            'comment' => $this->string(500),
            'theme' => $this->string(),
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
        $this->dropTable('{{%visitor}}');
    }
}
