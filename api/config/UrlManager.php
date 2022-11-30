<?php

/** @var array $params */

return [
    'class' => 'codemix\localeurls\UrlManager',
    'languages'=>['uz','ru','en'],
//    'baseUrl' => '',
    'enableStrictParsing' => true,
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => [
                'ip-students-info'
            ]
        ]
    ],
];
