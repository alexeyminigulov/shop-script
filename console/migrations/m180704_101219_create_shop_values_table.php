<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_values`.
 */
class m180704_101219_create_shop_values_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_values}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'attribute_id' => $this->integer()->notNull(),
            'value' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('{{%idx-shop_values-product_id-attribute_id}}', '{{%shop_values}}', ['product_id', 'attribute_id']);

        $this->createIndex('{{%idx-shop_values-product_id}}', '{{%shop_values}}', 'product_id');
        $this->createIndex('{{%idx-shop_values-attribute_id}}', '{{%shop_values}}', 'attribute_id');

        $this->addForeignKey('{{%fk-shop_values-product_id}}', '{{%shop_values}}', 'product_id', '{{%shop_products}}', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('{{%fk-shop_values_attribute_id}}', '{{%shop_values}}', 'attribute_id', '{{%shop_attributes}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%shop_values}}');
    }
}
