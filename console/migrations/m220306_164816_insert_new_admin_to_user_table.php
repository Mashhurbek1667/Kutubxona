<?php

use yii\db\Migration;

/**
 * Class m220306_164816_insert_new_admin_to_user_table
 */
class m220306_164816_insert_new_admin_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'username' => 'admin',
            'auth_key' => 'MCJW5dP6b2-VOWp-jcWaxcP1bjkTAX2c',
            'password_hash' => '$2y$13$nvmekHS1cxNUH0f89Fcbb.QvgINDN4N.P1rRfZLh8mt2Kp9PQXQEu',//admin123
            'email' => 'admin@admin.admin',
            'status' => 10,
            'created_at' => 1644902798,
            'updated_at' => 1644902798,
            'verification_token' => 'O_4c4nBw8j5BBM3DcgV1_ip23wQfALY3_1644902798',
            'is_admin' => 1,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('user', ['id' => 1]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220306_164816_insert_new_admin_to_user_table cannot be reverted.\n";

        return false;
    }
    */
}
