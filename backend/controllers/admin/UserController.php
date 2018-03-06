<?php

namespace backend\controllers\admin;

use common\models\ItemRp;
use common\models\Job;
use common\models\Purchase;
use Yii;
use common\models\User;
use common\models\UserSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends BaseController
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel'  => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        // 招聘
        $dataJobProvider = new ActiveDataProvider([
            'query'      => Job::find(['user_id' => $id]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        // 采购
        $dataPurchaseProvider = new ActiveDataProvider([
            'query'      => Purchase::find(['user_id' => $id]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('view', [
            'model'                => $this->findModel($id),
            'dataJobProvider'      => $dataJobProvider,
            'dataPurchaseProvider' => $dataPurchaseProvider,
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        $model->scenario = 'backend';

        $model->user_id = time() . '_' . rand(0000, 9999);

        $data = Yii::$app->request->post();

        if ($model->load($data) && $model->userReg()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {

            // 初始化
            $result = array();

            $dataRole = ItemRp::findAll(['type' => 1]);

            foreach ($dataRole as $value) {
                $result['role'][ $value['name'] ] = $value['name'];
            }

            return $this->render('create', [
                'model'  => $model,
                'result' => $result,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model->scenario = 'backend';

        $data = Yii::$app->request->post();

        if ($model->load($data) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {

            $model->password = null;

            return $this->render('update', [
                'model'  => $model,
                'result' => [
                    'role' => $this->getRole()
                ],
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function getRole()
    {
        // 初始化
        $result = array();

        $dataRole = ItemRp::findAll(['type' => 1]);

        foreach ($dataRole as $value) {
            $result[ $value['name'] ] = $value['name'];
        }

        return $result;
    }

}
