<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_discussions`.
 */
class m180916_095525_create_shop_discussions_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_discussions}}', [
            'user_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'text' => $this->string()->notNull(),
            'rating' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);

        $this->addPrimaryKey('{{%pk-shop_discussions}}', '{{%shop_discussions}}', ['user_id', 'product_id']);

        $this->createIndex('{{%idx-shop_discussions-user_id}}', '{{%shop_discussions}}', 'user_id');
        $this->createIndex('{{%idx-shop_discussions-product_id}}', '{{%shop_discussions}}', 'product_id');

        $this->addForeignKey('{{%fk-shop_discussions-user_id}}', '{{%shop_discussions}}', 'user_id', '{{%shop_users}}', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('{{%fk-shop_discussions-product_id}}', '{{%shop_discussions}}', 'product_id', '{{%shop_products}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%shop_discussions}}');
    }
}
