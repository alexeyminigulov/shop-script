<?php

use yii\db\Migration;

/**
 * Class m180725_044020_add_shop_product_description_field
 */
class m180725_044020_add_shop_product_description_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%shop_products}}', 'description', $this->text()->after('name'));
    }

    public function down()
    {
        $this->dropColumn('{{%shop_products}}', 'description');
    }
}
