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
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string(128)->notNull(),
            'access' => $this->tinyInteger()->defaultValue(0),
            // 'collection_type_id' => $this->integer()->notNull(),
            'created_at' => $this->timestamp()->defaultExpression('NOW()'),
            'updated_at' => $this->timestamp()->defaultExpression('NOW()')->append('ON UPDATE NOW()'),
        ]);

        $this->addForeignKey(
            'user_wish_fk_id',
            'user_collections',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->execute("ALTER TABLE user_collections ADD collection_type_id INT NULL;");
        $this->execute("ALTER TABLE user_collections ADD CONSTRAINT collection_wish_type_fk_id FOREIGN KEY (collection_type_id) REFERENCES wish_types(id);");

        // error null on delete - maybe cuz diff "types" of rows (null and not null)
        /* $this->addForeignKey(
            'collection_wish_type_fk_id',
            'user_collections',
            'collection_type_id',
            'wish_types',
            'id',
            'NULL'
        ); */
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user_collections');
    }
}
