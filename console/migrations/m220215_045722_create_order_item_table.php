<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_item}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%order}}`
 * - `{{%book}}`
 */
class m220215_045722_create_order_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_item}}', [
            'id' => $this->primaryKey(),
            'price' => $this->float(),
            'count' => $this->integer(),
            'order_id' => $this->integer()->notNull(),
            'book_id' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // creates index for column `order_id`
        $this->createIndex(
            '{{%idx-order_item-order_id}}',
            '{{%order_item}}',
            'order_id'
        );

        // add foreign key for table `{{%order}}`
        $this->addForeignKey(
            '{{%fk-order_item-order_id}}',
            '{{%order_item}}',
            'order_id',
            '{{%order}}',
            'id',
            'CASCADE'
        );

        // creates index for column `book_id`
        $this->createIndex(
            '{{%idx-order_item-book_id}}',
            '{{%order_item}}',
            'book_id'
        );

        // add foreign key for table `{{%book}}`
        $this->addForeignKey(
            '{{%fk-order_item-book_id}}',
            '{{%order_item}}',
            'book_id',
            '{{%book}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%order}}`
        $this->dropForeignKey(
            '{{%fk-order_item-order_id}}',
            '{{%order_item}}'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            '{{%idx-order_item-order_id}}',
            '{{%order_item}}'
        );

        // drops foreign key for table `{{%book}}`
        $this->dropForeignKey(
            '{{%fk-order_item-book_id}}',
            '{{%order_item}}'
        );

        // drops index for column `book_id`
        $this->dropIndex(
            '{{%idx-order_item-book_id}}',
            '{{%order_item}}'
        );

        $this->dropTable('{{%order_item}}');
    }
}
