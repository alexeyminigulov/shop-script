<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_categories`.
 */
class m180626_133718_create_shop_categories_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_categories}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull()->unique(),

            'lft'   => $this->integer()->notNull(),
            'rgt'   => $this->integer()->notNull(),
            'depth' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->insert('{{%shop_categories}}', [
            'id' => 1,
            'name' => 'Root',
            'slug' => 'root',

            'lft' => 1,
            'rgt' => 2,
            'depth' => 0,
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%shop_categories}}');
    }
}
