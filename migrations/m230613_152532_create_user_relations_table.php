<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_relations}}`.
 */
class m230613_152532_create_user_relations_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /* $this->createTable('user_relations', [
            'id' => $this->primaryKey(),
        ]); */
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // $this->dropTable('user_relations');
    }
}
