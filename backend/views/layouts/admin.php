<?php

use yii\helpers\Url;
use yii\helpers\Html;
use backend\assets\AppAsset;
use common\widgets\iMenu\MenuList;
use common\widgets\iConf\ConfList;

AppAsset::register($this); // $this 代表视图对象

if (!file_exists(Yii::getAlias('@webroot') . '/' . Yii::$app->params['RD_FILE'])) {
    return false;
}

$this->beginPage();

?>

<!DOCTYPE html>
<html class=" ">
<head>

    <?= ConfList::widget(); ?>

    <title>管理中心</title>

    <?php $this->head() ?>

</head>
<body class=" ">

<?php $this->beginBody() ?>

<?= Yii::$app->view->renderFile('@app/views/notifications.php'); ?>

<div class="page-container row-fluid">

    <div class="page-sidebar ">

        <!-- MAIN MENU - START -->
        <div class="page-sidebar-wrapper" id="main-menu-wrapper">

            <!-- USER INFO - START -->
            <div class="profile-info row">

                <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                    <a href="ui-profile.html">
                        <?= Html::img(Url::to('@web/themes/data/profile/profile.png'), ['class' => 'img-responsive img-circle']); ?>
                    </a>
                </div>

                <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                    <h3>
                        <a href="#"><?= Yii::$app->user->identity->username; ?></a>
                        <span class="profile-status online">Admin</span>
                    </h3>

                    <p class="profile-title"><?= Yii::$app->user->identity->login_ip; ?></p>

                </div>

            </div>

            <?= MenuList::widget(['config' => ['m_key' => 'A3', 'tpl' => 'admin']]); ?>

        </div>
    </div>

    <section id="main-content" class=" ">
        <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

            <?= $content ?>

        </section>
    </section>

</div>

<?php $this->endBody(); ?>

</body>
</html>

<?php $this->endPage() ?>
