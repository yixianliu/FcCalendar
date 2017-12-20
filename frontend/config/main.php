<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id'                  => 'app-frontend',
    'basePath'            => dirname(__DIR__),
    'language'            => 'zh-CN',
    'bootstrap'           => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components'          => [

        // 视图文件
        'view' => [
            'theme' => [
                'basePath' => '@app/frontend/views',
                'baseUrl'  => '@web/frontend/views/themes',
                'pathMap'  => [
                    '@app/views' => [
                        '@app/views/default'
                    ],
                ],
            ],
        ],

        'request'      => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user'         => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie'  => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session'      => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName'  => true,
            'rules'           => [
                // 默认
                '' => 'center/index',
            ],
        ],

        // 云片网
        'smser'      => [
            'class'    => 'daixianceng\smser\YunpianSmser',
            'apikey'   => '69164052569b42f33018712a83c6280b', // 请替换成您的Apikey
            'fileMode' => false
        ],

    ],

    'params'              => $params,
];
