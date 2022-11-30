<?php

namespace api\controllers;

use \api\models\IpStudentsInfo;
use common\components\helpers\ResponseStatus;
use \yii\rest\ActiveController;
use \yii;

class IpStudentsInfoController extends ApiController
{
    public $modelClass = 'api\models\IpStudentsInfo';

    public $table_name = 'ip_students_info';
    public $controller_name = 'IpStudentsInfo';


    public function actionCreate()
    {
        $model = new IpStudentsInfo();
        $post = Yii::$app->request->post();
        $this->load($model, $post );
        $result = IpStudentsInfo::createItem($model, $post);
        if (!is_array($result)) {
            return $this->response(1, t($this->controller_name . ' successfully created.'), $model, null, ResponseStatus::CREATED);
        } else {
            return $this->response(0, t('There is an error occurred while processing.'), null, $result, ResponseStatus::UPROCESSABLE_ENTITY);
        }
    }
}
