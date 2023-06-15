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
            'user_id' => $this->integer()->notNull(),
            'wish_name' => $this->string(255)->notNull(),
            'description' => $this->text()->null(),
            // 'user_collection_id' => $this->integer()->null(),
            'link' => $this->string(512)->null(),
            'price' => $this->decimal(8, 2)->null(),
            // 'wish_type_id' => $this->integer()->null(),
            'wish_priority' => $this->tinyInteger()->defaultValue(0),
            'image' => $this->string(255)->null(),
            'access' => $this->tinyInteger()->defaultValue(0),
            'status' => $this->tinyInteger()->defaultValue(0),
            'created_at' => $this->timestamp()->defaultExpression('NOW()'),
            'updated_at' => $this->timestamp()->defaultExpression('NOW()')->append('ON UPDATE NOW()'),
        ]);

        $this->addForeignKey(
            'user_wishes_fk_id',
            'user_wishes',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->execute("ALTER TABLE user_wishes ADD wish_type_id INT NULL AFTER price;");
        $this->execute("ALTER TABLE user_wishes ADD CONSTRAINT wish_type_fk_id FOREIGN KEY (wish_type_id) REFERENCES wish_types(id);");

        $this->execute("ALTER TABLE user_wishes ADD user_collection_id INT NULL AFTER user_id;");
        $this->execute("ALTER TABLE user_wishes ADD CONSTRAINT user_collection_fk_id FOREIGN KEY (user_collection_id) REFERENCES user_collections(id);");

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user_wishes');
    }
}
