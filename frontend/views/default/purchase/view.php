<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\fileupload\FileUploadUI;
use common\widgets\iConf\ConfList;

/* @var $this yii\web\View */
/* @var $model common\models\Purchase */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '采购中心', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile('@web/themes/qijian/css/purzoom.css');

$this->registerJsFile('@web/themes/qijian/js/jquery1.42.min.js');
$this->registerJsFile('@web/themes/qijian/js/jquery.SuperSlide.2.1.1.js');
$this->registerJsFile('@web/themes/qijian/js/jqzoom/jquery.jqzoom.js');
$this->registerJsFile('@web/themes/qijian/js/jqzoom/base.js');

?>

<?= $this->render('../slide', ['pagekey' => 'purchase']); ?>

<!-- 内容中心 -->
<div class="container content">

    <!-- 当前位置 -->
    <?= $this->render('../nav'); ?>
    <!-- #当前位置 -->

    <!-- 可变化内容 -->
    <div class="conY">
        <div class="conY_tit"><?= $model->title ?></div>
        <div class="conY_dat">所有者：<?= $model->user_id ?>&nbsp;&nbsp;&nbsp;时间：<?= date('Y - m - d', $model->updated_at) ?></div>

        <div class="conY_text">

            <!-- 产品开始 -->
            <div class="right-extra">

                <!-- 产品参数开始 -->
                <div class="tendcont">

                    <!-- #左边.产品图片 -->
                    <div class="tend-left">

                        <div id="preview" class="spec-preview">

                            <span class="jqzoom">

                                <?php if (!empty($result)): ?>

                                    <?= Html::img(Url::to('@web/themes/qijian/images/ser-left-1.jpg'), ['alt' => $this->title, 'jqimg' => Url::to('@web/themes/qijian/images/ser-left-1.jpg')]); ?>

                                <?php else: ?>

                                    <?= Html::img(Url::to('@web/themes/qijian/images/ser-left-1.jpg'), ['alt' => $this->title]); ?>

                                <?php endif; ?>

                            </span>

                        </div>

                        <?php if (!empty($result)): ?>
                            <div class="spec-scroll">
                                <a class="prev"></a>
                                <a class="next"></a>
                                <div class="items">
                                    <ul>

                                        <?php foreach ($result as $value): ?>
                                            <li>
                                                <?= Html::img(Url::to('@web/themes/qijian/images/ser-left-1.jpg'), ['alt' => $this->title, 'bimg' => Url::to('@web/themes/qijian/images/pro-1.jpg'), 'onmousemove' => 'preview(this);']); ?>
                                            </li>
                                        <?php endforeach; ?>

                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                    <!-- #左边.产品图片 -->

                    <!-- 右边.产品参数 -->
                    <div class="tend-right">

                        <!-- 产品参数.上 -->
                        <div class="tend-up">

                            <!-- 产品价格 -->
                            <div class="t-money">
                                <span class="right-color">价格 : </span><font><?= $model->price ?></font>
                            </div>
                            <!-- #产品价格 -->

                        </div>
                        <!-- #产品参数.上 -->

                        <hr>

                        <!-- 产品参数.下 -->
                        <div class="tend-down">

                            <!-- 参数详细信息 -->
                            <div class="tend-down-left">
                                <p>
                                    <?= $model->is_type ?>
                                    <?= $model->is_status ?>
                                    <?= $model->num ?>
                                    <?= $model->is_using ?>
                                </p>
                            </div>
                            <!-- #参数详细信息 -->

                            <!-- 商家信息 -->
                            <div class="tend-right-right">

                                <div class="tend-border">
                                    <?= ConfList::widget(['config' => [$this->title, 'view']]); ?>
                                </div>

                            </div>
                            <!-- #商家信息 -->

                        </div>
                        <!-- #产品参数.下 -->

                    </div>
                    <!-- #产品参数 -->

                </div>
                <!-- #产品参数结束 -->

                <div style="clear:both;height:10px;"></div>

                <!-- 内容,评论 -->
                <div class="m" id="comment">
                    <!-- 切换按钮 -->
                    <ul class="tab clearfix">
                        <li onclick="tabs('#comment',0)" class="curr">
                            商品详情<strong></strong>
                        </li>
                    </ul>
                    <!-- #切换按钮 -->

                    <!-- 图文介绍 -->
                    <div class="mc tabcon" style="display:block;">
                        <div class="norecode">
                            <?= $model->content ?>
                        </div>
                    </div>
                    <!-- #图文介绍 -->

                </div>
                <!-- #内容,评论 -->

                <hr/>

                <div class="release-message">

                    <?php if ($offer == true): ?>
                        <?php if (!empty(Yii::$app->user->identity->user_id)): ?>

                            <?php
                            $form = ActiveForm::begin([
                                'action' => ['sp-offer/create', 'id' => 'P0', 'type' => 'Purchase'],
                                'method' => 'post',
                                'id'     => $modelOffer->formName(),
                            ]);
                            ?>

                            <p class="right-tar">
                                <span class="right-color">提交价格 : </span>
                                <?= $form->field($modelOffer, 'price')->textInput()->label(false) ?>
                            </p>

                            <p>

                            <hr/>

                            <?=
                            FileUploadUI::widget([
                                'model'         => $modelOffer,
                                'attribute'     => 'path',
                                'url'           => ['upload/image-upload', 'id' => $modelOffer->path, 'type' => 'sp_offer', 'attribute' => 'path'],
                                'gallery'       => false,
                                'fieldOptions'  => [
                                    'accept' => 'image/*'
                                ],
                                'clientOptions' => [
                                    'maxFileSize'      => 2000000,
                                    'dataType'         => 'json',
                                    'maxNumberOfFiles' => 5,
                                ],

                                // ...
                                'clientEvents'  => [

                                    'fileuploaddone' => 'function(e, data) {
                                console.log(e);
                                console.log(data);
                                
                                var html = "";
                                
                                var ImagesContent = $("#ImagesContent");
                                
                                $.each(data.result.files, function (index, file) {
                                    html += file.name + \',\';
                                });
                                
                                html += ImagesContent.val();
                                
                                ImagesContent.val(html);
                                
                                return true;
                            }',
                                    'fileuploadfail' => 'function(e, data) {
                                console.log(e);
                                console.log(data);
                            }',
                                ],
                            ]);
                            ?>

                            <?= $form->field($modelOffer, 'path')->textarea(['id' => 'ImagesContent', 'style' => 'display:none;'])->label(false) ?>

                            <?= $form->field($modelOffer, 'offer_id')->hiddenInput(['value' => $model->purchase_id])->label(false) ?>

                            <hr/>

                            </p>

                            <p>

                                <?=
                                $form->field($modelOffer, 'content')
                                    ->widget('kucha\ueditor\UEditor', [
                                        'clientOptions' => [
                                            //设置语言
                                            'lang'               => 'zh-cn',
                                            'initialFrameHeight' => '400',
                                            'elementPathEnabled' => false,
                                            'wordCount'          => false,
                                        ]
                                    ]);
                                ?>

                            </p>

                            <p>
                                <?= Html::submitButton('提交内容', ['class' => 'btn btn-red']) ?>
                            </p>

                            <br/>

                            <p>
                                <?= Yii::$app->view->renderFile('@app/views/default/formMsg.php'); ?>
                            </p>

                            <?php ActiveForm::end(); ?>

                        <?php else: ?>

                            <h3>请登录后提交内容 !! </h3>

                            <br/>

                            点这里, <a href="<?= Url::to(['member/login']) ?>" title="<?= $model->title ?>">用户登录</a>

                        <?php endif; ?>

                    <?php else: ?>

                        <h2>此采购已被采纳 !!</h2>

                    <?php endif; ?>

                </div>

            </div>
            <!-- #产品结束 -->

        </div>

    </div>
    <!-- #可变化内容 -->

</div>