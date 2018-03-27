<?php
/**
 *
 * 前台配置控制器
 *
 * Created by Yixianliu.
 * User: Yxl <zccem@163.com>
 * Date: 2017/6/18
 * Time: 15:57
 */

namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class BaseController extends Controller
{

    // 布局
    public $layout = 'qijian';

    // 构造
    public function init()
    {

        parent::init();

        $web = Yii::getAlias('@web');

        Yii::setAlias('@web', $web . '/frontend/web');

        $session = Yii::$app->session;

        if (!$session->has('language')) {

            // 设置一个session变量，以下用法是相同的：
            $session->set('language', 'cn');
            $session->set('language_name', '中文版');
        }

        return true;
    }

    /**
     * 判断用户
     *
     * @return void|\yii\web\Response
     */
    public function isUser()
    {

        if (Yii::$app->user->isGuest) {
            echo '<script language="javascript" type="text/javascript">window.location.href="' . Url::to(['/member/login']) . '"; </script> ';
            exit(false);
        }

        return true;
    }

    /**
     * @return array
     */
    public function actions()
    {
        return [
            'upload' => [
                'class'  => 'kucha\ueditor\UEditorAction',
                'config' => [
                    "imageUrlPrefix"       => Yii::$app->request->getHostInfo() . '/', // 图片访问路径前缀
                    "imagePathFormat"      => "/UEditor/temp/{yyyy}{mm}{dd}/{time}{rand:6}", // 上传保存路径
                    "imageRoot"            => Yii::getAlias("@webroot"),
                    "imageManagerListPath" => Yii::getAlias("@web") . "/UEditor/product",
                ],
            ]
        ];
    }

}