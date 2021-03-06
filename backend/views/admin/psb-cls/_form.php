<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use phpnt\ICheck\ICheck;

/* @var $this yii\web\View */
/* @var $model common\models\PsbClassify */
/* @var $form yii\widgets\ActiveForm */

switch ($model->is_type) {

    default:
    case 'Supply':
        $title = '供应';
        break;

    case 'Purchase':
        $title = '采购';
        break;

    case 'Bid':
        $title = '投标';
        break;
}

?>

<div class="col-lg-12">
    <section class="box ">

        <header class="panel_header"><h2 class="title pull-left"><?= $title . ' - ' . Html::encode( $this->title ) ?></h2></header>

        <div class="content-body">
            <div class="row">

                <?php $form = ActiveForm::begin(); ?>

                <?=
                $form->field( $model, 'is_type' )->widget( kartik\select2\Select2::classname(), [
                    'data'          => ['Supply' => '供应类型', 'Purchase' => '采购类型', 'Bid' => '投标类型'],
                    'options'       => ['placeholder' => '选择类型...', 'disabled' => 'disabled'],
                    'pluginOptions' => [
                        'allowClear' => true,
                    ],
                ] );
                ?>

                <?=
                $form->field( $model, 'parent_id' )->widget( kartik\select2\Select2::classname(), [
                    'data'          => $result['classify'],
                    'options'       => ['placeholder' => '选择父类...'],
                    'pluginOptions' => [
                        'allowClear' => true,
                    ],
                ] );
                ?>

                <?= $form->field( $model, 'name' )->textInput( ['maxlength' => true] ) ?>

                <?= $form->field( $model, 'sort_id' )->textInput( ['maxlength' => true] ) ?>

                <?= $form->field( $model, 'keywords' )->textInput( ['maxlength' => true] ) ?>

                <?= $form->field( $model, 'description' )->textarea( ['rows' => 6] ) ?>

                <?=
                $form->field( $model, 'is_using' )->widget( ICheck::className(), [
                    'type'    => ICheck::TYPE_RADIO_LIST,
                    'style'   => ICheck::STYLE_SQUARE,
                    'items'   => ['On' => '开启', 'Off' => '关闭'],
                    'color'   => 'red',
                    'options' => [
                        'item' => function ($index, $label, $name, $checked, $value) {
                            return '<input type="radio" id="coupon_type' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> <label for="coupon_type' . $index . '">' . $label . '</label>&nbsp;&nbsp;';
                        },
                    ]] )
                ?>

                <div class="form-group">

                    <?= Html::submitButton( $model->isNewRecord ? '创建分类' : '更新分类', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'] ) ?>

                    <?= Html::a( '返回列表', ['index', 'id' => $id], ['class' => 'btn btn-primary'] ) ?>

                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </section>
</div>

