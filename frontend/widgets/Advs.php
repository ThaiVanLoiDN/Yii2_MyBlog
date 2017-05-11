<?php

//use yii;
namespace frontend\widgets;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\AdvsSearch;

class Advs extends Widget{

	public $listAdvs;

	public function init()
	{
		$this->listAdvs = AdvsSearch::find()->where(['location' => 'rightbar'])->all();
	}
	
	public function run(){
		return $this->render('advs', ['listAdvs' => $this->listAdvs]);
	}
}

?>