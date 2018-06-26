<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_brands`.
 */
class m180626_121913_create_shop_brands_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_brands}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull()->unique(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%shop_brands}}');
    }
}
