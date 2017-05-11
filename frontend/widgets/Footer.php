<?php

//use yii;
namespace frontend\widgets;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\CategorySearch;
use common\models\PostSearch;
use common\models\AdvsSearch;

class Footer extends Widget{
	
	public $listCategory;
	public $listRecentPost;
	public $listAdvs;

	public function init()
	{
		$this->listCategory = CategorySearch::find()->all();
		$this->listAdvs = AdvsSearch::find()->where(['location' => 'footer'])->all();
		$this->listRecentPost = PostSearch::find()->orderBy(['read_count' => SORT_DESC])->limit(5)->all();

	}
	
	public function run(){
		return $this->render('footer', ['listCategory' => $this->listCategory, 'listAdvs' => $this->listAdvs, 'listRecentPost' => $this->listRecentPost]);
	}
}

?>