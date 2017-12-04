<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductClassify */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="col-lg-12">
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">
                <?= Html::encode($this->title) ?>
            </h2>
        </header>
        <div class="content-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <?php $form = ActiveForm::begin(); ?>

                    <?=
                    $form->field($model, 'parent_id')->widget(Select2::classname(), [
                        'data'          => $result['classify'],
                        'options'       => ['placeholder' => '选择产品分类...'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?>

                    <?= $form->field($model, 'c_key')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'sort_id')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'ico_class')->textInput(['maxlength' => true]) ?>

                    <?=
                    $form->field($model, 'is_using')->widget(kartik\select2\Select2::classname(), [
                        'data'          => ['On' => '开启', 'Off' => '关闭'],
                        'options'       => ['placeholder' => '选择...'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?>

                    <div class="form-group">

                        <?= Html::submitButton($model->isNewRecord ? '创建产品分类' : '更新产品分类', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

                        <?= Html::a('返回列表', ['index'], ['class' => 'btn btn-primary']) ?>

                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </section>
</div>


