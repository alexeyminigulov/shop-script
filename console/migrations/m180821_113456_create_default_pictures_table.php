<?php

use yii\db\Migration;

/**
 * Handles the creation of table `default_pictures`.
 */
class m180821_113456_create_default_pictures_table extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%default_pictures}}', [
            'picture' => $this->string()->unique()->notNull(),
        ], $tableOptions);

        $this->insert('{{%default_pictures}}', [
            'picture' => 'product.png',
        ]);

        $this->insert('{{%default_pictures}}', [
            'picture' => 'person.png',
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%default_pictures}}');
    }
}
