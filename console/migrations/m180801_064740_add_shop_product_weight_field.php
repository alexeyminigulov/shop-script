<?php

use yii\db\Migration;

/**
 * Class m180801_064740_add_shop_product_weight_field
 */
class m180801_064740_add_shop_product_weight_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%shop_products}}', 'weight', $this->integer()->notNull());
    }

    public function down()
    {
        $this->dropColumn('{{%shop_products}}', 'weight');
    }
}
