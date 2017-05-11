<?php

//use yii;
namespace frontend\widgets;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\CategorySearch;

class Category extends Widget{

	public $listCategory;

	public function init()
	{
		$this->listCategory = CategorySearch::find()->all();
	}
	
	public function run(){
		return $this->render('category', ['listCategory' => $this->listCategory]);
	}
}

?>