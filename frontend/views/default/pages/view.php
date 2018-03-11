<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pages */

$this->title = $result['menu']->name;
$this->params['breadcrumbs'][] = ['label' => $result['menu']['name'], 'url' => ['index', 'id' => $model->page_id]];
$this->params['breadcrumbs'][] = $this->title;

?>

<?= $this->render('../slide', ['pagekey' => $model->page_id]); ?>

<!-- 左右框架 -->
<div class="container content">

    <?= $this->render('../_left', ['type' => 'pages', 'm_key' => $result['menu']['parent_id']]); ?>

    <!-- 右边 -->
    <div class="right">

        <?= $this->render('../nav'); ?>

        <!-- 可变化内容 -->
        <div class="conY">
            <div class="conY_text">

                <?= $model->content ?>

            </div>

            <div class="conY_fanye">
                <div class="conY_fanyel">
                    上一篇：<a href="#" title="">上一篇</a>
                </div>
                <div class="conY_fanyer">
                    下一篇：<a href="#" title="">下一篇</a>
                </div>
            </div>
        </div>
        <!-- #可变化内容 -->

    </div>
    <!-- 右边 -->

</div>