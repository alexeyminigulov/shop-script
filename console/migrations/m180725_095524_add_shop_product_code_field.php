<?php

use yii\db\Migration;

/**
 * Class m180725_095524_add_shop_product_code_field
 */
class m180725_095524_add_shop_product_code_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%shop_products}}', 'code', $this->string()->notNull());
    }

    public function down()
    {
        $this->dropColumn('{{%shop_products}}', 'code');
    }
}
