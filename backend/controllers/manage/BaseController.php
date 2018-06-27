<?php

namespace backend\controllers\manage;

use Yii;

class BaseController extends \yii\web\Controller
{

    public $layout = 'admin';

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub

        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/manage/member/login']);
        }

        return true;
    }



}
