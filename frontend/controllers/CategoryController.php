<?php

namespace frontend\controllers;
use common\models\Category;
use common\models\Post;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class CategoryController extends \yii\web\Controller
{
	public $layout = 'main-simple';
	
    public function actionShow($id)
    {
    	$query = Post::find()->where(['category_id' => $id]);
	    $countQuery = clone $query;
	    $pages = new Pagination(['totalCount' => $countQuery->count()]);
	    $listPost = $query->offset($pages->offset)
	        ->limit($pages->limit)
	        ->all();

        return $this->render('show', [
        	'layout' => $this->layout,
            'model' => $this->findModel($id),
            'pages' => $pages,
            'listPost' => $listPost,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    

}
