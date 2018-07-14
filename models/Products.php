<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $price
 * @property string $upload
 * @property int $available
 * @property string $created_at
 * @property string $updated_at
 */
class Products extends \yii\db\ActiveRecord
{
	public $upload;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type', 'price'], 'required'],
            [['price', 'available'], 'integer'],
            [['name', 'type'], 'string', 'max' => 255],
	        [['upload'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
	    return [
		    'id' => 'ID',
		    'name' => 'Termék neve',
		    'type' => 'Termék típusa',
		    'price' => 'Termék ára',
		    'available' => 'Elérhető?',
		    'created_at' => 'Létrehozva',
		    'updated_at' => 'Utoljára módosítva',
	    ];
    }
}
