<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_filters`.
 */
class m180720_082806_create_shop_filters_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_filters}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'attribute_id' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
        ], $tableOptions);

        $this->createIndex('{{%idx-shop_filters-attribute_id}}', '{{%shop_filters}}', 'attribute_id', true);

        $this->addForeignKey('{{%fk-shop_filters-attribute_id}}', '{{%shop_filters}}', 'attribute_id', '{{%shop_attributes}}', 'id');
    }

    public function down()
    {
        $this->dropTable('{{%shop_filters}}');
    }
}
