<?php
/**
 *
 * 布局控制器
 *
 * Created by Yixianliu.
 * User: Yxl <zccem@163.com>
 * Date: 2017/6/6
 * Time: 21:46
 */

namespace backend\controllers\admin;

use Yii;
use yii\web\Controller;

class BaseController extends Controller
{

    public $layout = 'admin';

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub

        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/admin/member/login']);
        }

        $session = Yii::$app->session;

        if (!$session->has('language')) {

            // 设置一个session变量，以下用法是相同的：
            $session->set('language', 'cn');
            $session->set('language_name', '中文版');
        }

        return true;
    }

    /**
     * 前置函数
     *
     * @param $action
     * @return bool|void|\yii\web\Response
     * @throws \yii\web\UnauthorizedHttpException
     */
    public function beforeAction($action)
    {

        if (!file_exists(Yii::getAlias('@webroot') . '/' . Yii::$app->params['RD_FILE'])) {
            return $this->redirect(['/mount/member/login']);
        }

        if (Yii::$app->user->isGuest) {
            return;
        }

        $power =  Yii::$app->controller->action->id . ucfirst(explode('/', Yii::$app->controller->id)[1]);

        if (!Yii::$app->user->can($power) && Yii::$app->getErrorHandler()->exception === null) {
//            throw new \yii\web\UnauthorizedHttpException('对不起，您现在还没获此操作的权限 !!');
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

    /**
     * 随机生成关键KEY
     *
     * @param $len
     * @param null $chars
     * @return string
     */
    public static function getRandomString($len = 1, $chars = null)
    {

        if (is_null($chars)) {
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        }

        mt_srand(10000000 * (double)microtime());

        for ($i = 0, $str = '', $lc = strlen($chars) - 1; $i < $len; $i++) {
            $str .= $chars[ mt_rand(0, $lc) ];
        }

        $str = $str . time() . rand(0000, 9999);

        return $str;
    }

}