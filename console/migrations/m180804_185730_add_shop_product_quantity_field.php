<?php

use yii\db\Migration;

/**
 * Class m180804_185730_add_shop_product_quantity_field
 */
class m180804_185730_add_shop_product_quantity_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%shop_products}}', 'quantity', $this->integer()
            ->notNull()->defaultValue(0)->unsigned());
    }

    public function down()
    {
        $this->dropColumn('{{%shop_products}}', 'quantity');
    }
}
