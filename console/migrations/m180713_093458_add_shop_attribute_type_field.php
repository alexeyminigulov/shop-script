<?php

use yii\db\Migration;

/**
 * Class m180713_093458_add_shop_attribute_type_field
 */
class m180713_093458_add_shop_attribute_type_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%shop_attributes}}', 'type', $this->string()->notNull());
        $this->update('{{%shop_attributes}}', ['type' => 'text']);

        $this->createIndex('{{%idx-shop_attributes-type}}', '{{%shop_attributes}}', 'type');
    }

    public function down()
    {
        $this->dropIndex('{{%idx-shop_attributes-type}}', '{{%shop_attributes}}');
        $this->dropColumn('{{%shop_attributes}}', 'type');
    }
}
