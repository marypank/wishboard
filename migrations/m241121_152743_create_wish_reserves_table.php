<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wish_reserves}}`.
 */
class m241121_152743_create_wish_reserves_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%wish_reserves}}', [
            'wish_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            '{{%reserves_user_id_foreign}}',
            '{{%wish_reserves}}',
            'user_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            '{{%reserves_wish_id_foreign}}',
            '{{%wish_reserves}}',
            'wish_id',
            '{{%wishes}}',
            'id',
            'CASCADE'
        );

        $this->createIndex('{{%reserves_unique}}', '{{%wish_reserves}}', ['wish_id', 'user_id'], true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%wish_reserves}}');
    }
}
