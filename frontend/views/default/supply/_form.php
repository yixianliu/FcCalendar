<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Supply */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="section-wrap blog-standard" style="padding: 60px 0">
    <div class="container relative">
        <div class="row">

            <div class="col-sm-3 sidebar blog-sidebar">
                <?= $this->render('../user/_left'); ?>
            </div>

            <div class="col-sm-9 blog-content">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'c_key')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'supply_id')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'num')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'is_type')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'is_status')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'start_at')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'end_at')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'is_send_msg')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'is_using')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>

    <?= Yii::$app->view->renderFile('@app/views/default/formMsg.php'); ?>

</section>

