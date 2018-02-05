<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PurchaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '采购中心';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile('@web/themes/qijian/css/product.css');
?>

<?= $this->render('../slide', ['pagekey' => 'purchase']); ?>

<style type="text/css">
    .summary {
        display: none;
    }
</style>

<div class="container content">

    <!-- 当前位置 -->
    <?= $this->render('../nav'); ?>
    <!-- #当前位置 -->

    <!-- 相关分类 -->
    <?= $this->render('../cls', ['result' => $result, 'type' => 'purchase']); ?>
    <!-- #相关分类 -->

    <!-- 多项选择 -->
    <div class="corre-nav">
        <ul class="nav nav-pills">
            <li><a title="" href="">综合</a></li>
            <li><a title="" href="">人气</a></li>
            <li><a title="" href="">销量</a></li>
            <li class="dropdown">
                <a title="" class="dropdown-toggle" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false" href="">
                    全国地区
                    <!-- 三角形图标 -->
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li><a title="" href="">赤坎</a></li>
                    <li><a title="" href="">霞山</a></li>
                    <li><a title="" href="">麻章</a></li>
                    <li><a title="" href="">徐闻</a></li>
                    <li><a title="" href="">雷州</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a title="" class="dropdown-toggle" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false" href="">
                    价钱排序
                    <!-- 三角形图标 -->
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li><a title="" href="">价格从低到高</a></li>
                    <li><a title="" href="">价格从高到低</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <?php if (!empty(Yii::$app->user->identity->user_id)): ?>
        <div class="col-md-12 col-sm-4 col-xs-6 work-item web-design mockups">
            <?= Html::a('发布采购', ['create'], ['class' => 'btn']) ?>
        </div>

        <br/> <br/> <br/>
    <?php endif; ?>

    <div class="content_product_list">
        <ul>

            <?=
            ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView'     => '_list',
                'viewParams'   => [
                    'fullView' => true,
                    'context'  => 'main-page',
                ]
            ]);
            ?>

        </ul>
    </div>

</div>
