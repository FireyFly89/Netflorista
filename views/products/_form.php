<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">
    <?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'type')->dropDownList(
		['gift' => 'Ajándék', 'sweets' => 'Édesség', 'alcohol' => 'Alkohol', 'plush' => 'Plüss'],
		['prompt'=> 'Válasszon ki egy típust']
	); ?>
	<?= $form->field($model, 'price') ?>
	<?= $form->field($model, 'available')->checkbox(); ?>
	<?= $form->field($model, 'upload')->fileInput(); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
