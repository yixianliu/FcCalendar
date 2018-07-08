<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Slide */

$this->title = $model['cls']['name'];
$this->params['breadcrumbs'][] = ['label' => '幻灯片', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-lg-12">
    <section class="box ">

        <header class="panel_header">
            <h2 class="title pull-left"><?= Html::encode($this->title) ?></h2>
        </header>

        <div class="content-body">
            <div class="row">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('更新', ['update', 'id' => $model['id']], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('删除', ['delete', 'id' => $model['id']], [
                        'class' => 'btn btn-danger',
                        'data'  => [
                            'confirm' => '是否删除这条记录?',
                            'method'  => 'post',
                        ],
                    ]) ?>
                    <?= Html::a('返回列表', ['index'], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('继续添加', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?=
                DetailView::widget([
                    'model'      => $model,
                    'attributes' => [
                        [
                            'attribute' => 'c_key',
                            'value'     => function ($model) {

                                $data = \common\models\SlideClassify::findAll(['is_using' => 'On']);

                                foreach ($data as $value) {
                                    $state[ $value['c_key'] ] = $value['name'];
                                }

                                $data = \common\models\Pages::findByAll(['is_using' => 'On']);

                                foreach ($data as $value) {
                                    $state[ $value['page_id'] ] = $value['menu']['name'];
                                }

                                return $state[ $model->c_key ];
                            },
                        ],
                        [
                            'attribute' => 'path',
                            'format'    => 'html',
                            'value'     => function ($model) {

                                $imgArray = explode(',', $model->path);

                                $data = null;

                                foreach ($imgArray as $value) {

                                    if (empty($value))
                                        continue;

                                    $data .= '<img width=350 height=150 src="' . Yii::getAlias('@web/../../frontend/web/temp/slide/noId/') . $value . '" /><br /><br />';
                                }

                                return $data;
                            },
                        ],
                        'description:ntext',
                        [
                            'attribute' => 'is_using',
                            'value'     => function ($model) {
                                $state = [
                                    'On'  => '开启',
                                    'Off' => '未启用',
                                ];

                                return $state[ $model->is_using ];
                            },
                        ],
                        [
                            'attribute' => 'created_at',
                            'value'     => function ($model) {
                                return date('Y - m -d , h:i', $model->created_at);
                            },
                        ],
                        [
                            'attribute' => 'updated_at',
                            'value'     => function ($model) {
                                return date('Y - m -d , h:i', $model->updated_at);
                            },
                        ],
                    ],
                    'template' => '<tr><th width="200">{label}</th><td>{value}</td></tr>',
                ]);
                ?>

            </div>
        </div>
    </section>
</div>

