<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_products`.
 */
class m180704_100233_create_shop_products_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('{{%idx-shop_products-slug}}', '{{%shop_products}}', 'slug', true);
        $this->createIndex('{{%idx-shop_products-category_id}}', '{{%shop_products}}', 'category_id');

        $this->addForeignKey('{{%fk-shop_products-category_id}}', '{{%shop_products}}', 'category_id', '{{%shop_categories}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%shop_products}}');
    }
}
