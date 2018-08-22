<?php

use yii\db\Migration;

/**
 * Class m180822_092046_add_shop_banner_background_color_field
 */
class m180822_092046_add_shop_banner_background_color_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%shop_banners}}', 'background_color', $this->string()->notNull()->defaultValue('#FFFFFF'));

        $this->update('{{%shop_banners}}', ['background_color' => '#FFFFFF']);
    }

    public function down()
    {
        $this->dropColumn('{{%shop_banners}}', 'background_color');
    }
}
