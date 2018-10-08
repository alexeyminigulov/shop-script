<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_wishitems`.
 */
class m181007_150502_create_shop_wish_items_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_wish_items}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('{{%idx-shop_wish_items-user_id}}', '{{%shop_wish_items}}', 'user_id');
        $this->createIndex('{{%idx-shop_wish_items-product_id}}', '{{%shop_wish_items}}', 'product_id');

        $this->addForeignKey('{{%fk-shop_wish_items-user_id}}', '{{%shop_wish_items}}', 'user_id', '{{%users}}', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('{{%fk-shop_wish_items-product_id}}', '{{%shop_wish_items}}', 'product_id', '{{%shop_products}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%shop_wish_items}}');
    }
}
