<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_wishes}}`.
 */
class m230613_152521_create_user_wishes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user_wishes', [
            'id' => $this->primaryKey(),
            'user_id', 'wish_name', 'description', 'link', 'price', 'type', 'wish_priority', 'image', 'access', 'status', 'user_collection_id'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user_wishes');
    }
}
