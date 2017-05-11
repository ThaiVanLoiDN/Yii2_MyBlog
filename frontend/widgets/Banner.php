<?php

//use yii;
namespace frontend\widgets;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\PostSearch;

class Banner extends Widget{

	public $listRecentPost;

	public function init()
	{
		$this->listRecentPost = PostSearch::find()->limit(5)->all();
	}
	
	public function run(){
		return $this->render('banner', ['listRecentPost' => $this->listRecentPost]);
	}
}

?>