<?php

use yii\db\Migration;

/**
 * Class m180725_135317_add_shop_product_main_picture_field
 */
class m180725_135317_add_shop_product_main_picture_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%shop_products}}', 'main_picture_id', $this->integer());

        $this->createIndex('{{%idx-shop_products-main_picture_id}}', '{{%shop_products}}', 'main_picture_id');

        $this->addForeignKey('{{%fk-shop_products-main_picture_id}}', '{{%shop_products}}', 'main_picture_id', '{{%shop_pictures}}', 'id', 'SET NULL', 'RESTRICT');
    }

    public function down()
    {
        $this->dropIndex('{{%idx-shop_products-main_picture_id}}', '{{%shop_products}}');
        $this->dropForeignKey('{{%fk-shop_products-main_picture_id}}', '{{%shop_products}}');
        $this->dropColumn('{{%shop_products}}', 'main_picture_id');
    }
}
