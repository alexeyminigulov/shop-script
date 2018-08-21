<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_banners`.
 */
class m180821_095442_create_shop_banners_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%shop_banners}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'button_title' => $this->string()->notNull(),
            'button_url' => $this->string()->notNull(),
            'image' => $this->string(),
            'background_img' => $this->string(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%shop_banners}}');
    }
}
