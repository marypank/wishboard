<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wish_types}}`.
 */
class m240929_092617_create_wish_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%wish_types}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(64),
            'created_at' => $this->timestamp()->defaultExpression('NOW()'),
            'updated_at' => $this->timestamp()->defaultExpression('NOW()')->append('ON UPDATE NOW()'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%wish_types}}');
    }
}
