<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_attribute_groups`.
 */
class m180704_100253_create_shop_attribute_groups_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_attribute_groups}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%shop_attribute_groups}}');
    }
}
