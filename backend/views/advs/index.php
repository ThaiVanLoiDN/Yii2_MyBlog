<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use common\models\Advs;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AdvsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Advs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Advs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?> 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'link',
            [
                'attribute' => 'location',
                'filter' => Advs::listLocation(),                
            ],

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
    <?php Pjax::end(); ?>
</div>
