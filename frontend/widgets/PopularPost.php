<?php

//use yii;
namespace frontend\widgets;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\PostSearch;

class PopularPost extends Widget{

	public $listRecentPost;
	
	public function init()
	{
		$this->listRecentPost = PostSearch::find()->orderBy(['read_count' => SORT_DESC])->limit(5)->all();
	}
	
	public function run(){
		return $this->render('popularpost', ['listRecentPost' => $this->listRecentPost]);
	}
}

?>