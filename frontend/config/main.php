<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
		'authManager' => [
			'class' => 'yii\rbac\DbManager',
			'defaultRoles' => ['user','moder','admin'], //здесь прописываем роли
		],
		/*'authManager' => [
			'class' => 'yii\rbac\DbManager',
			'defaultRoles' => ['user','moder','admin'], //здесь прописываем роли
			//зададим куда будут сохраняться наши файлы конфигураций RBAC
			'itemFile' => '@common/components/rbac/items.php',
			'assignmentFile' => '@common/components/rbac/assignments.php',
			'ruleFile' => '@common/components/rbac/rules.php'
		],*/
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'agent/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
			//'baseUrl' => '/backend/web',
        ],/*
		'urlManagerFrontEnd' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => '/frontend/web',
			'enablePrettyUrl' => true,
			'showScriptName' => false,
		]*/
    ],
	"defaultRoute"=>"agent",
    'params' => $params,
];
