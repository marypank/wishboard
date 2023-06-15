<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_personal_info}}`.
 */
class m230613_152650_create_user_personal_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /* $this->createTable('user_personal_info', [
            'id' => $this->primaryKey(),
        ]); */
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // $this->dropTable('user_personal_info');
    }
}
