<?php

//use yii;
namespace frontend\widgets;
use yii\base\Widget;
use yii\helpers\Html;

class FeaturedPost extends Widget{
	public function init()
	{
		
	}
	
	public function run(){
		return $this->render('featuredpost');
	}
}

?>