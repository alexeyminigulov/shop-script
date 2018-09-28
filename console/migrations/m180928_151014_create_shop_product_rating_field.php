<?php

use yii\db\Migration;

/**
 * Class m180928_151014_create_shop_product_rating_field
 */
class m180928_151014_create_shop_product_rating_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%shop_products}}', 'rating', $this->float()->notNull()->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('{{%shop_products}}', 'rating');
    }
}
