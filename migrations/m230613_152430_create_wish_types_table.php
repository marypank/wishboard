<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wish_types}}`.
 */
class m230613_152430_create_wish_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('wish_types', [
            'id' => $this->primaryKey(),
            'name'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('wish_types');
    }
}
