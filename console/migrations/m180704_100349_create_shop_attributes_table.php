<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_attributes`.
 */
class m180704_100349_create_shop_attributes_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_attributes}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->unique(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%shop_attributes}}');
    }
}
