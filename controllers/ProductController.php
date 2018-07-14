<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * ProductController for REST api.
 */
class ProductController extends ActiveController
{
	public $modelClass = 'app\models\Products';
}
