<?php

namespace frontend\controllers;
use common\models\Post;
use yii\web\NotFoundHttpException;

class PostController extends \yii\web\Controller
{
    public $layout = 'main-simple';
    public function actionShow($id)
    {
        return $this->render('show', [
            'layout' => $this->layout,
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
