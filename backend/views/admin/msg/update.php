<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OnlineMsg */

$this->title = '更新留言: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '在线留言', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

