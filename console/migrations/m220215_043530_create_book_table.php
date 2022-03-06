<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%author}}`
 * - `{{%language}}`
 * - `{{%format}}`
 * - `{{%publisher}}`
 * - `{{%category}}`
 */
class m220215_043530_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'star' => $this->float()->defaultValue(0),
            'price' => $this->double()->defaultValue(0),
            'discount' => $this->float()->defaultValue(0),
            'description' => $this->string(500),
            'published' => $this->date(),
            'page_count' => $this->integer(),
            'author_id' => $this->integer(),
            'language_id' => $this->integer(),
            'format_id' => $this->integer(),
            'publisher_id' => $this->integer(),
            'category_id' => $this->integer(),
            'status' => $this->integer()->defaultValue(0),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // creates index for column `author_id`
        $this->createIndex(
            '{{%idx-book-author_id}}',
            '{{%book}}',
            'author_id'
        );

        // add foreign key for table `{{%author}}`
        $this->addForeignKey(
            '{{%fk-book-author_id}}',
            '{{%book}}',
            'author_id',
            '{{%author}}',
            'id',
            'CASCADE'
        );

        // creates index for column `language_id`
        $this->createIndex(
            '{{%idx-book-language_id}}',
            '{{%book}}',
            'language_id'
        );

        // add foreign key for table `{{%language}}`
        $this->addForeignKey(
            '{{%fk-book-language_id}}',
            '{{%book}}',
            'language_id',
            '{{%language}}',
            'id',
            'CASCADE'
        );

        // creates index for column `format_id`
        $this->createIndex(
            '{{%idx-book-format_id}}',
            '{{%book}}',
            'format_id'
        );

        // add foreign key for table `{{%format}}`
        $this->addForeignKey(
            '{{%fk-book-format_id}}',
            '{{%book}}',
            'format_id',
            '{{%format}}',
            'id',
            'CASCADE'
        );

        // creates index for column `publisher_id`
        $this->createIndex(
            '{{%idx-book-publisher_id}}',
            '{{%book}}',
            'publisher_id'
        );

        // add foreign key for table `{{%publisher}}`
        $this->addForeignKey(
            '{{%fk-book-publisher_id}}',
            '{{%book}}',
            'publisher_id',
            '{{%publisher}}',
            'id',
            'CASCADE'
        );

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-book-category_id}}',
            '{{%book}}',
            'category_id'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            '{{%fk-book-category_id}}',
            '{{%book}}',
            'category_id',
            '{{%category}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%author}}`
        $this->dropForeignKey(
            '{{%fk-book-author_id}}',
            '{{%book}}'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            '{{%idx-book-author_id}}',
            '{{%book}}'
        );

        // drops foreign key for table `{{%language}}`
        $this->dropForeignKey(
            '{{%fk-book-language_id}}',
            '{{%book}}'
        );

        // drops index for column `language_id`
        $this->dropIndex(
            '{{%idx-book-language_id}}',
            '{{%book}}'
        );

        // drops foreign key for table `{{%format}}`
        $this->dropForeignKey(
            '{{%fk-book-format_id}}',
            '{{%book}}'
        );

        // drops index for column `format_id`
        $this->dropIndex(
            '{{%idx-book-format_id}}',
            '{{%book}}'
        );

        // drops foreign key for table `{{%publisher}}`
        $this->dropForeignKey(
            '{{%fk-book-publisher_id}}',
            '{{%book}}'
        );

        // drops index for column `publisher_id`
        $this->dropIndex(
            '{{%idx-book-publisher_id}}',
            '{{%book}}'
        );

        // drops foreign key for table `{{%category}}`
        $this->dropForeignKey(
            '{{%fk-book-category_id}}',
            '{{%book}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-book-category_id}}',
            '{{%book}}'
        );

        $this->dropTable('{{%book}}');
    }
}
