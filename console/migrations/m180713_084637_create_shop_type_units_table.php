<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_type_units`.
 */
class m180713_084637_create_shop_type_units_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_type_units}}', [
            'id' => $this->primaryKey(),
            'attribute_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('{{%idx-shop_type_units-attribute_id}}', '{{%shop_type_units}}', 'attribute_id', true);

        $this->addForeignKey('{{%fk-shop_type_units-attribute_id}}', '{{%shop_type_units}}', 'attribute_id', '{{%shop_attributes}}', 'id');
    }

    public function down()
    {
        $this->dropTable('{{%shop_type_units}}');
    }
}
