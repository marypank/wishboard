<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wishes}}`.
 */
class m240929_092636_create_wishes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%wishes}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->null(),
            'price' => $this->decimal(8, 2)->null(),
            // todo: 'currency_id' => $this->integer()->null(),
            'link' => $this->string()->null(),
            'image' => $this->string()->null(),
            'priority' => $this->boolean()->defaultValue(0),
            'visibility' => $this->boolean()->defaultValue(0),
            'status' => $this->boolean()->defaultValue(0),
            'wish_type_id' => $this->integer()->null(),
            'created_at' => $this->timestamp()->defaultExpression('NOW()'),
            'updated_at' => $this->timestamp()->defaultExpression('NOW()')->append('ON UPDATE NOW()'),
        ]);

        $this->addForeignKey(
            '{{%wishes_user_id_foreign}}',
            '{{%wishes}}',
            'user_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            '{{%wishes_wish_type_id_foreign}}',
            '{{%wishes}}',
            'wish_type_id',
            '{{%wish_types}}',
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%wishes}}');
    }
}
