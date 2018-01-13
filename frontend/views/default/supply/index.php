<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SupplySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '供应中心';
$this->params['breadcrumbs'][] = $this->title;

?>

<?= $this->render('../slide', ['pagekey' => 'supply']); ?>

<?= $this->render('../nav'); ?>

<style type="text/css">
    .summary {
        display: none;
    }
</style>

<section class="section-wrap-mp pb-50">
    <div class="container">

        <?= $this->render('../cls', ['result' => $result, 'type' => 'supply']); ?>

        <div class="row">

            <?=
            ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView'     => '_list',
                'viewParams'   => [
                    'fullView' => true,
                    'context'  => 'main-page',
                ],
                'options'      => ['class' => 'works-grid titles'],
            ]);
            ?>

        </div>
    </div>
</section>

<section class="call-to-action bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-xs-12">
                <h2>Are you ready to work with us? Let's grow your business.</h2>
            </div>

            <div class="col-md-3 col-xs-12 cta-button">
                <a href="#" class="btn btn-lg btn-color">Contact Us</a>
            </div>

        </div>
    </div>
</section>

