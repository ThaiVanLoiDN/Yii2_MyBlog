<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SocialNetworkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Social Networks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-network-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Social Network', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'link',
            'class',

            ['class' => 'yii\grid\ActionColumn'],
        ],

        'containerOptions'=>['style'=>'overflow: auto'], 
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'pjax' => true,

        'responsiveWrap' => false,

        'responsive' => true,
        'hover' => true,
    ]); ?>
</div>
