<?php

namespace backend\controllers\admin;

use Yii;
use common\models\NavClassify;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\PsbClassify;

/**
 * NavClsController implements the CRUD actions for NavClassify model.
 */
class NavClsController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],

            'verbs' => [
                'class'   => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all NavClassify models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = NavClassify::findByAll();

        foreach ($dataProvider as $key => $value) {

            $clsArray = explode(',', $value['p_key']);

            foreach ($clsArray as $valuePkey) {

                if (empty($valuePkey))
                    continue;

                $dataProvider[ $key ]['child'][] = PsbClassify::findOne(['c_key' => $valuePkey]);
            }

        }

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NavClassify model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new NavClassify model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new NavClassify();

        $data = Yii::$app->request->post();

        if (!empty($data)) {
            $data['NavClassify']['p_key'] = $this->setCls($data['NavClassify']['p_key']);
        }

        $model->c_key = self::getRandomString();

        if ($model->load($data) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->c_key]);
        }

        return $this->render('create', [
            'model'  => $model,
            'result' => [
                'classify' => PsbClassify::findByAll('P0', 'Purchase'),
            ]
        ]);
    }

    /**
     * Updates an existing NavClassify model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {

        $model = $this->findModel($id);

        $data = Yii::$app->request->post();

        if (!empty($data)) {
            $data['NavClassify']['p_key'] = $this->setCls($data['NavClassify']['p_key']);
        }

        if ($model->load($data) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->c_key]);
        }

        // 整合
        if (!empty($model->p_key)) {

            // 分解
            $model->p_key = explode(',', $model->p_key);
        }

        return $this->render('update', [
            'model'  => $model,
            'result' => [
                'classify' => PsbClassify::findByAll('P0', 'Purchase'),
            ],
        ]);
    }

    /**
     * Deletes an existing NavClassify model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NavClassify model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return NavClassify the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = NavClassify::findOne(['c_key' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * 设置产品分类
     *
     * @param $array
     * @return null|string
     */
    public function setCls($array)
    {

        // 初始化
        $result = null;

        if (empty($array))
            return;

        foreach ($array as $value) {

            if (empty($value))
                continue;

            $result .= $value . ',';
        }

        return $result;
    }
}
