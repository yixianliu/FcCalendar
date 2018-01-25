<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MenuModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'model_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_using')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>