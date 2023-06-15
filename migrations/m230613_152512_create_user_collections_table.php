<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_collections}}`.
 */
class m230613_152512_create_user_collections_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user_collections', [
            'id' => $this->primaryKey(),
            'user_id', 'title', 'access', 'collection_type'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user_collections');
    }
}
