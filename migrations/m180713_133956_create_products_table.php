<?php

use yii\db\Migration;

/**
 * Handles the creation of table `products`.
 */
class m180713_133956_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
	        'id' => $this->primaryKey(),
	        'name' => $this->string()->notNull(),
	        'type' => $this->string()->notNull(),
	        'price' => $this->integer()->notNull(),
	        'image' => $this->string(),
	        'available' => $this->tinyInteger()->defaultValue(0),
	        'created_at' => $this->datetime()->notNull(),
	        'updated_at' => $this->datetime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('products');
    }
}
