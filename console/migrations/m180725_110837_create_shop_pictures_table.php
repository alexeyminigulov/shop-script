<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_pictures`.
 */
class m180725_110837_create_shop_pictures_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_pictures}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'picture' => $this->string()->notNull(),
            'sort' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%shop_pictures}}');
    }
}
