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

        if (!file_exists(Yii::getAlias('@webroot') . '/' . Yii::$app->params['RD_FILE'])) {
            return $this->redirect(['/mount/member/login']);
        }
    }
}