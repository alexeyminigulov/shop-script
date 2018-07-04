<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_attribute_group_assignments`.
 */
class m180704_120406_create_shop_attribute_group_assignments_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_attribute_group_assignments}}', [
            'category_id' => $this->integer()->notNull(),
            'group_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addPrimaryKey('pk-shop_attribute_group_assignments}}', '{{%shop_attribute_group_assignments}}', ['category_id', 'group_id']);

        $this->createIndex('idx-shop_attribute_group_assignments-category_id}}', '{{%shop_attribute_group_assignments}}', 'category_id');
        $this->createIndex('idx-shop_attribute_group_assignments-group_id}}', '{{%shop_attribute_group_assignments}}', 'group_id');

        $this->addForeignKey('{{%fk-shop_attribute_group_assignments-category_id}}', '{{%shop_attribute_group_assignments}}', 'category_id', '{{%shop_categories}}', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('{{%fk-shop_attribute_group_assignments-group_id}}', '{{%shop_attribute_group_assignments}}', 'group_id', '{{%shop_attribute_groups}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%shop_attribute_group_assignments}}');
    }
}
