<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use phpnt\ICheck\ICheck;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="col-lg-12">
    <section class="box ">

        <header class="panel_header">
            <h2 class="title pull-left"><?= Html::encode( $this->title ) ?></h2>
        </header>

        <div class="content-body">
            <div class="row">

                <?php $form = ActiveForm::begin(); ?>

                <?=
                $form->field( $model, 'parent_id' )->widget( Select2::classname(), [
                    'data'          => $result['parent'],
                    'options'       => ['placeholder' => '选择...'],
                    'pluginOptions' => [
                        'allowClear' => true,
                    ],
                ] );
                ?>

                <?=
                $form->field( $model, 'is_language' )->widget( ICheck::className(),
                    [
                        'type'    => ICheck::TYPE_RADIO_LIST,
                        'style'   => ICheck::STYLE_SQUARE,
                        'items'   => $result['language'],
                        'color'   => 'red',
                        'options' => [
                            'item' => function ($index, $label, $name, $checked, $value) {
                                return '<input type="radio" id="is_language' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> <label for="is_language' . $index . '">' . $label . '</label>&nbsp;&nbsp;';
                            },
                        ],
                    ]
                );
                ?>

                <?= $form->field( $model, 'name' )->textInput( ['maxlength' => true] ) ?>

                <?= $form->field( $model, 'sort_id' )->textInput( ['maxlength' => true] ) ?>

                <?=
                $form->field( $model, 'model_key' )->widget( Select2::classname(), [
                    'data'          => $result['menu_model'],
                    'options'       => ['placeholder' => '选择菜单模型...'],
                    'pluginOptions' => [
                        'allowClear' => true,
                    ],
                ] );
                ?>

                <?= $form->field( $model, 'url' )->textInput( ['maxlength' => true] ) ?>

                <?=
                $form->field( $model, 'is_type' )->widget( ICheck::className(),
                    [
                        'type'    => ICheck::TYPE_RADIO_LIST,
                        'style'   => ICheck::STYLE_SQUARE,
                        'items'   => ['list' => '列表内容类型', 'view' => '内容详情类型', 'show' => '展示详情类型', 'index' => '首页类型', 'center' => '中心类型'],
                        'color'   => 'red',
                        'options' => [
                            'item' => function ($index, $label, $name, $checked, $value) {
                                return '<input type="radio" id="is_type' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> <label for="is_type' . $index . '">' . $label . '</label>&nbsp;&nbsp;';
                            },
                        ],
                    ]
                );
                ?>

                <?=
                $form->field( $model, 'rp_key' )->widget( ICheck::className(),
                    [
                        'type'    => ICheck::TYPE_RADIO_LIST,
                        'style'   => ICheck::STYLE_SQUARE,
                        'items'   => $result['role'],
                        'color'   => 'red',
                        'options' => [
                            'item' => function ($index, $label, $name, $checked, $value) {
                                return '<input type="radio" id="rp_key' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> <label for="rp_key' . $index . '">' . $label . '</label>&nbsp;&nbsp;';
                            },
                        ],
                    ]
                );
                ?>

                <?=
                $form->field( $model, 'is_using' )->widget( ICheck::className(),
                    [
                        'type'    => ICheck::TYPE_RADIO_LIST,
                        'style'   => ICheck::STYLE_SQUARE,
                        'items'   => ['On' => '开启', 'Off' => '关闭'],
                        'color'   => 'red',
                        'options' => [
                            'item' => function ($index, $label, $name, $checked, $value) {
                                return '<input type="radio" id="is_using' . $index . '" name="' . $name . '" value="' . $value . '" ' . ($checked ? 'checked' : false) . '> <label for="is_using' . $index . '">' . $label . '</label>&nbsp;&nbsp;';
                            },
                        ],
                    ]
                );
                ?>

                <div class="form-group">

                    <?= Html::submitButton( $model->isNewRecord ? '创建菜单' : '更新菜单', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'] ) ?>

                    <?= Html::a( '返回列表', ['index'], ['class' => 'btn btn-primary'] ) ?>

                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

        <?= $this->render( '../../formMsg' ); ?>

    </section>
</div>

<script type="text/javascript">

    var ModelKey = $('#menu-model_key').val();

    $('.field-menu-url').hide();
    $('.field-menu-is_type').hide();

    // 超链接
    if (ModelKey == 'UU1') {
        $('.field-menu-url').show();
    }

    // 显示类型
    if (ModelKey != 'UU1' && ModelKey != '') {
        $('.field-menu-is_type').show();
    }

    $('#menu-model_key').on('change', function () {

        var selectVal = $(this).val();

        // 栏目类型
        if (selectVal != 'UU1' && (selectVal == 'UC1' || selectVal == 'UP2')) {

            $('.field-menu-is_type').show();

            // 链接
            $('.field-menu-url').hide();
            $('#menu-url').val('');
        }

        if (selectVal == 'UU1') {
            $('.field-menu-url').show();
            $('.field-menu-is_type').hide();
        }

        if ((selectVal != 'UC1' && selectVal != 'UP2') && selectVal != 'UU1') {

            $('.field-menu-url').hide();
            $('.field-menu-is_type').hide();

            // 单页面
            $('.field-menu-custom_key').hide();
            $('#menu-custom_key').attr("checked", "");

            // 链接
            $('#menu-url').val('');
        }

        return true;
    });

</script>
