<?php

namespace frontend\modules\rest\controllers;

use common\models\Message;
use common\models\Todo;
use yii\rest\ActiveController;
/**
 * Default controller for the `GA` module
 */
class RestController extends ActiveController
{

    public $modelClass = 'common\models\Todo';

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create']);
        unset($actions['update']);

        return $actions;
    }

    public function actionCreate()
    {
        $post = \Yii::$app->request->post();


        $model = new Todo();
        $model->load($post, '');
        $model->status = 10;
        $model->save();

        $message = new Message();
        $message->load($post, '');
        $message->save();
        return $message;

    }


}