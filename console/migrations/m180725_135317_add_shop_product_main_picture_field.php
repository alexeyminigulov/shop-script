<?php

use yii\db\Migration;

/**
 * Class m180725_135317_add_shop_product_main_picture_field
 */
class m180725_135317_add_shop_product_main_picture_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%shop_products}}', 'main_picture', $this->string());
    }

    public function down()
    {
        $this->dropColumn('{{%shop_products}}', 'main_picture');
    }
}
