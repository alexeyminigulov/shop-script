<?php

use yii\db\Migration;

/**
 * Class m180822_092200_add_shop_banner_color_scheme_field
 */
class m180822_092200_add_shop_banner_color_scheme_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%shop_banners}}', 'color_scheme', $this->string()->notNull());

        $this->update('{{%shop_banners}}', ['color_scheme' => 'light']);
    }

    public function down()
    {
        $this->dropColumn('{{%shop_banners}}', 'color_scheme');
    }
}