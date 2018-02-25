<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户中心';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-12">
    <section class="box ">

        <header class="panel_header">
            <h2 class="title pull-left"><?= Html::encode($this->title) ?></h2>
        </header>

        <div class="content-body">
            <div class="row">

                <?= $this->render('_search', ['model' => $searchModel]); ?>

                <hr/>

                <p>
                    <?= Html::a('创建用户', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'options'      => ['class' => 'table table-hover'],
                    'columns'      => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'username',
                        'r_key',
                        // 'exp',
                        // 'credit',
                        // 'nickname',
                        // 'signature',
                        // 'birthday',
                        // 'answer',
                        // 's_key',
                        [
                            'attribute' => 'is_type',
                            'value'     => function ($model) {
                                $state = [
                                    'user'       => '用户',
                                    'enterprise' => '企业用户',
                                    'supplier'   => '供应商',
                                ];

                                return $state[ $model->is_type ];
                            },
                        ],
                        // 'consecutively',
                        [
                            'attribute' => 'sex',
                            'value'     => function ($model) {
                                $state = [
                                    'Male'   => '男人',
                                    'Female' => '女人',
                                ];

                                return $state[ $model->sex ];
                            },
                        ],
                        // 'is_display',
                        // 'is_head',
                        // 'is_security',
                        [
                            'attribute' => 'is_using',
                            'value'     => function ($model) {
                                $state = [
                                    'On'  => '已启用',
                                    'Off' => '未启用',
                                    'Not' => '未审核',
                                ];

                                return $state[ $model->is_using ];
                            },
                        ],
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]);
                ?>

            </div>
        </div>
    </section>
</div>

