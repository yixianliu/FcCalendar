<?php
/**
 *
 * 注册模板
 *
 * Created by Yxl.
 * User: <zccem@163.com>.
 * Date: 2017/12/12
 * Time: 16:14
 */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

$this->title = '用户注册';

$this->params['breadcrumbs'][] = ['label' => '用户中心', 'url' => ['/center/index']];
$this->params['breadcrumbs'][] = '注册';

$this->registerCssFile('@web/themes/qijian/css/member.css');

?>

<div class="member-user-reg">
    <div class="user-reg-cont">

        <?php
        $form = ActiveForm::begin([
            'action'      => ['member/reg'],
            'method'      => 'post',
            'id'          => $model->formName(),
            'fieldConfig' => [
                'template'     => '<div>{input}</div>',
                'inputOptions' => ['class' => 'form-control'],
            ],
            'options'     => ['class' => 'form-horizontal']
        ]);
        ?>

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">用户类型 : </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <?=
                    $form->field($model, 'is_type')
                        ->widget(Select2::classname(), [
                            'data'    => ['user' => '用户', 'enterprise' => '企业用户', 'supplier' => '供应商用户'],
                            'options' => ['placeholder' => '用户类型...'],
                        ])
                        ->label(false);
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">用户名 : </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <?=
                    $form->field($model, 'username')
                        ->textInput(['maxlength' => true, 'id' => 'username', 'aria-describedby' => '请输入用户名或手机号码', 'placeholder' => '请输入用户名或手机号码'])
                        ->label(false)
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">设置密码 : </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pass"></i></span>
                    <?=
                    $form->field($model, 'password')
                        ->passwordInput(['maxlength' => true, 'aria-describedby' => '请输入6-16位密码', 'placeholder' => '请输入6-16位密码'])
                        ->label(false)
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="confirmpasswork" class="col-sm-3 control-label">确认密码 : </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pass"></i></span>
                    <?=
                    $form->field($model, 'repassword')
                        ->passwordInput(['maxlength' => true, 'aria-describedby' => '请输入6-16位密码', 'placeholder' => '请输入6-16位密码'])
                        ->label(false)
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="code" class="col-sm-3 control-label">验证码 : </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-code"></i></span>
                    <?=
                    $form->field($model, 'msg')
                        ->textInput(['maxlength' => 5, 'placeholder' => '请输入验证码', 'aria-describedby' => '请输入验证码'])
                        ->label(false)
                    ?>
                    <a id="SendMsg" class="input-group-addon code-red" href="#">获取验证码</a>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">

                <?= Html::submitButton('免费注册', ['class' => 'btn btn-red']) ?>

                <?= Html::a('有账号? 请登录', ['member/login'], ['class' => 'btn btn-red']) ?>

            </div>
        </div>

        <?php ActiveForm::end() ?>

    </div>

    <?= Yii::$app->view->renderFile('@app/views/default/formMsg.php'); ?>

</div>

<div id="myCarousel" class="carousel slide">

    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
            <?= Html::img(Url::to('@web/themes/qijian/images/banar3.jpg'), ['alt' => '']); ?>
        </div>
        <div class="item">
            <?= Html::img(Url::to('@web/themes/qijian/images/banar3.jpg'), ['alt' => '']); ?>
        </div>
        <div class="item">
            <?= Html::img(Url::to('@web/themes/qijian/images/banar3.jpg'), ['alt' => '']); ?>
        </div>
    </div>

    <!-- 轮播（Carousel）导航 -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

</div>

<div class="container-fluid h-job">

    <div class="container">

        <div class="starter-template">
            <h1 class="text-center text-color"><span style="color: #cf0d15;font-weight: bold;">建筑辅材</span> 采购招标火热招募中</h1>
            <h5 class="text-center text-color">追求绿色环保、完美空间创造的精神</h5>
            <h5 class="text-center"><a class="hjob-btn" title="" href="<?= Url::to(['/purchase/index']) ?>">立即前往 >></a></h5>
        </div>

    </div>

</div>

<script type="text/javascript">

    $('.input-group').children('div').removeClass('form-group');

    $('#SendMsg').on('click', function () {

        var username = $('#username').val();

        if (username == '') {
            alert('请填写手机号码?');
            return false;
        }

        $(this).text('已发送,1个小时内有效.').attr('disabled', 'disabled');

        $.ajax({
            url: '<?= Url::to(['member/send']) ?>',
            type: 'POST', // GET
            async: false,    // 或false,是否异步
            dataType: 'json',
            data: {
                username: username, '_csrf-frontend': "<?= Yii::$app->request->csrfToken ?>",
            },
            success: function (data, textStatus, jqXHR) {
                console.log(data);
                console.log(textStatus);
                console.log(jqXHR)
            },
            error: function (xhr, textStatus) {
                console.log('错误');
                console.log(xhr);
                console.log(textStatus)
            },
            complete: function () {
                console.log('结束')
            }
        });

    });
</script>
