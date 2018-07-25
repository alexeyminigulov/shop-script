<?php

use yii\db\Migration;

/**
 * Class m180725_044756_add_shop_product_brand_id_field
 */
class m180725_044756_add_shop_product_brand_id_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%shop_products}}', 'brand_id', $this->integer()->notNull());
        $this->update('{{%shop_products}}', ['brand_id' => 1]);

        $this->createIndex('{{%idx-shop_products-brand_id}}', '{{%shop_products}}', 'brand_id');

        $this->addForeignKey('{{%fk-shop_products-brand_id}}', '{{%shop_products}}', 'brand_id', '{{%shop_brands}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropIndex('{{%idx-shop_products-brand_id}}', '{{%shop_products}}');
        $this->dropForeignKey('{{%fk-shop_products-brand_id}}', '{{%shop_products}}');
        $this->dropColumn('{{%shop_products}}', 'brand_id');
    }
}
