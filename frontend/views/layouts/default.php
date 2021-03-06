<?php

use yii\helpers\Url;
use yii\helpers\Html;
use frontend\assets\DefaultAsset;

DefaultAsset::register($this);

$this->beginPage();

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>

    <?= Yii::$app->view->renderFile('@app/views/default/_head.php'); ?>

    <?php $this->head() ?>

    <script type="text/javascript">
        $(function () {
            funs();
            goTop();
        });
    </script>

</head>

<body>

<?php $this->beginBody() ?>

<nav class="navbar navbar-default">
    <div class="container">

        <div class="pull-left">
            <a class="navbar-brand" title="" href="<?= Url::to([ 'center/index' ]) ?>">
                <?= Html::img(Url::to('@web/temp/conf/' . Yii::$app->view->params[ 'ConfArray' ][ 'WEB_LOGO' ]), [ 'alt' => Yii::$app->view->params[ 'ConfArray' ][ 'NAME' ] ]); ?>
            </a>
        </div>

        <div class="pull-right">
            <?= \common\widgets\iMenu\MenuList::widget([ 'config' => [ 'E1', Yii::$app->session[ 'language' ] ] ]) ?>
        </div>

    </div>
</nav>

<?= $content ?>

<div class="container-fluid foot">
    <div class="container">
        <?= Yii::$app->view->renderFile('@app/views/default/_foot.php'); ?>
    </div>
</div>


<!-- 返回顶部 -->
<div class="button-go-top">
    <a href="#" title="" class="go-top">
        <i class="glyphicon glyphicon-chevron-up"></i>
    </a>
</div>
<!-- #返回顶部 -->

<?php $this->endBody(); ?>

</body>
</html>

<?php $this->endPage() ?>
