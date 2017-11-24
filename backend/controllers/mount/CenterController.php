<?php

/**
 * @abstract 挂载中心
 * @author   Yxl <zccem@163.com>
 */

namespace backend\controllers\mount;

use Yii;
use yii\web\Controller;
use backend\models\MountForm;
use backend\models\MountRunForm;

class CenterController extends BaseController
{

    /**
     * @abstract 首页
     */
    public function actionView()
    {
        return $this->render('../view');
    }

    /**
     * @abstract 安装页面
     */
    public function actionRun()
    {
        $model = new MountRunForm();

        $request = Yii::$app->request;

        if ($request->isPost) {

            if ($model->load($request->post())) {

                $post = $request->post('mysql_data', 'On');

                $mysql_data = ($post == 'Off') ? null : file_get_contents(Yii::getAlias('@webroot') . '/SampleSql/data.sql');

                // 批量SQL语句
                $Sql_Data = file_get_contents(Yii::getAlias('@webroot') . '/SampleSql/base.sql') . $mysql_data;

                $Sql_Data = str_ireplace('#NAME#', $request->post('MountRunForm')['name'], $Sql_Data);
                $Sql_Data = str_ireplace('#TITLE#', $request->post('MountRunForm')['title'], $Sql_Data);
                $Sql_Data = str_ireplace('#DESCRIPTION#', Yii::$app->params['DESCRIPTION'], $Sql_Data);
                $Sql_Data = str_ireplace('#KEYWORDS#', Yii::$app->params['KEYWORDS'], $Sql_Data);
                $Sql_Data = str_ireplace('#DEVELOPERS#', Yii::$app->params['DEVELOPERS'], $Sql_Data);
                $Sql_Data = str_ireplace('#EMAIL#', Yii::$app->params['EMAIL'], $Sql_Data);
                $Sql_Data = str_ireplace('#SITE_URL#', Yii::$app->params['SITE_URL'], $Sql_Data);
                $Sql_Data = str_ireplace('#ICP#', Yii::$app->params['ICP'], $Sql_Data);
                $Sql_Data = str_ireplace('#PHONE#', Yii::$app->params['PHONE'], $Sql_Data);
                $Sql_Data = str_ireplace('#COPYRIGHT#', Yii::$app->params['COPYRIGHT'], $Sql_Data);

                // 数据库
                $Sql_Data = str_ireplace('#DB_PREFIX#', Yii::$app->components['db']['tablePrefix'], $Sql_Data);
                $Sql_Data = str_ireplace('#DB_CODE#', Yii::$app->components['db']['charset'], $Sql_Data);

                // 后台管理帐号密码
                $Sql_Data = str_ireplace('#USERNAME#', Yii::$app->params['Username'], $Sql_Data);
                $Sql_Data = str_ireplace('#PASSWORD#', Yii::$app->getSecurity()->generatePasswordHash(Yii::$app->params['Password']), $Sql_Data);

                // Time
                $Sql_Data = str_ireplace('#TIME#', time(), $Sql_Data);

                // 执行 SQL
                $arraySql = explode(';', $Sql_Data);

                foreach ($arraySql as $value) {

                    if (!isset($value) || empty($value)) {
                        continue;
                    }

                    // 执行 Sql
                    Yii::$app->db->createCommand($value)->execute();
                }

                Yii::$app->getSession()->setFlash('success', '挂载成功 !!');

            } else {
                Yii::$app->getSession()->setFlash('error', '无法挂载 !!');
            }
        }

        return $this->render('../run', ['model' => $model]);
    }

    /**
     * 存入权限
     *
     * @return string
     */
    public function actionSetpower()
    {

        $model = new MountForm();

        $request = Yii::$app->request;

        if ($request->isPost) {

            $model->scenario = 'power';

            if ($model->load($request->post()) && $model->validate()) {

                $power = [
                    'indexCenter', 'confCenter', // 管理中心
                    'createNews', 'editNews', 'indexNews', 'viewNews', // 新闻
                    'createNews-cls', 'editNews-cls', 'indexNews-cls', 'viewNews-cls', // 新闻分类
                    'createProduct', 'editProduct', 'indexProduct', 'viewProduct', // 产品
                    'createProduct-cls', 'editProduct-cls', 'indexProduct-cls', 'viewProduct-cls', // 产品分类
                    'createUser', 'userUser', 'indexUser', 'viewUser', // 用户
                    'createJob', 'editJob', 'indexJob', 'viewJob', // 招聘
                ];

                $role = $this->createRole('admin');

                foreach ($power as $value) {
                    $permission = $this->createPermission($value);
                    $this->addChild($role, $permission);
                }

                $this->assign($role);

                // 生成安装文件
                file_put_contents(
                    Yii::getAlias('@webroot') . '/' . Yii::$app->params['RD_FILE'], date('Y年m月d日 H时i分s秒') . "\n\r" . Yii::$app->params['NAME'] . "\n\r" . Yii::$app->params['TITLE']
                );

                Yii::$app->getSession()->setFlash('success', '添加数据包成功 !!');

            } else {
                Yii::$app->getSession()->setFlash('error', $model->getErrors());
            }
        }

        return $this->render('../setpower', ['model' => $model]);
    }

    // 添加权限
    public function createPermission($name)
    {
        $auth = Yii::$app->authManager;

        $permission = $auth->createPermission($name);
        $permission->description = '创建了 ' . $name . ' 权限';

        // add
        $auth->add($permission);

        return $permission;
    }

    // 添加角色
    public function createRole($name)
    {
        $auth = Yii::$app->authManager;

        $role = $auth->createRole($name);
        $role->description = '创建了 ' . $name . ' 角色';

        // add
        $auth->add($role);

        return $role;
    }

    // 关联
    public function addChild($role, $power)
    {
        $auth = Yii::$app->authManager;
        $auth->addChild($role, $power); // 添加对应关系
        return true;
    }

    // 角色分配管理员
    public function assign($role)
    {
        $auth = Yii::$app->authManager;
        $auth->assign($role, 1);

        return true;
    }

}
