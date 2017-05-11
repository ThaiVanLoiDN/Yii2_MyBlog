<?php

//use yii;
namespace frontend\widgets;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\SocialNetworkSearch;

class TopBar extends Widget{
	
	public $listSocialNetwork;

	public function init()
	{
		$this->listSocialNetwork = SocialNetworkSearch::find()->all();
	}
	
	public function run(){
		return $this->render('topbar', ['listSocialNetwork' => $this->listSocialNetwork]);
	}
}

?>