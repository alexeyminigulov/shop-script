<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_type_list`.
 */
class m180713_085649_create_shop_type_list_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_type_list}}', [
            'id' => $this->primaryKey(),
            'attribute_id' => $this->integer()->notNull(),
            'option' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('{{%idx-shop_type_list-attribute_id}}', '{{%shop_type_list}}', 'attribute_id');

        $this->addForeignKey('{{%fk-shop_type_list-attribute_id}}', '{{%shop_type_list}}', 'attribute_id', '{{%shop_attributes}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%shop_type_list}}');
    }
}
