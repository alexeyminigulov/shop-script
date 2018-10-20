<?php

use yii\db\Migration;

/**
 * Class m181020_141536_add_user_email_confirm_token_field
 */
class m181020_141536_add_user_email_confirm_token_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%users}}', 'email_confirm_token', $this->string());
    }

    public function down()
    {
        $this->dropColumn('{{%users}}', 'email_confirm_token');
    }
}
