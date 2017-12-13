<?php
/**
 * Created by Yxl.
 * User: <zccem@163.com>.
 * Date: 2017/12/8
 * Time: 15:34
 */

use yii\helpers\Url;
use yii\helpers\Html;

$images = array();

// 取出图片
if (!empty($img)) {

    $imagesArray = explode(',', $img);

    foreach ($imagesArray as $value) {

        if (empty($value))
            break;

        $images[] = $value;
    }
}

?>


<div class="content-body">
    <div class="row">

        <?php if (!empty($images) && is_array($images)): ?>

            <div class="col-md-12 col-sm-12 col-xs-12 ">

                <?php foreach ($images as $value): ?>
                    <div class="col-md-2 col-sm-6 col-xs-12">

                        <?= Html::img(Url::to('@web/temp/') . '/' . $type . '/' . $value, ['class' => 'img-responsive', 'width' => 180, 'height' => 100]); ?>

                        <div class="portfolio-info animated fadeInUp animated-duration-600ms">

                            <h5 class="deleteH5"><?= $value ?></h5>

                            <button class="btn btn-danger delete" data-type="GET" data-url="<?= Url::to(['admin/upload/image-delete', 'name' => $value, 'type' => $type]); ?>">
                                <i class="glyphicon glyphicon-trash"></i>
                                <span>删除</span>
                            </button>

                        </div>

                    </div>
                <?php endforeach ?>

            </div>

            <script type="text/javascript">

                $('.portfolio-info').on('click', function () {

                    var h5 = $(this).find('.deleteH5').html();

                    // 获取 ID
                    var ImageId = $('#ImagesContent');

                    var imgArray = ImageId.html().split(',');

                    // 重新处理
                    var NewImageContent = '';

                    for (var i = 0; i < imgArray.length; i++) {
                        if (imgArray[i] == h5 || imgArray[i] == '') {
                            continue;
                        }
                        NewImageContent += imgArray[i] + ',';
                    }

                    ImageId.empty().html(NewImageContent);

                    $(this).parent('div').hide();

                    return true;
                });

            </script>

        <?php else: ?>

            <h3>暂无相关图片 !!</h3>

        <?php endif ?>

    </div>
</div>