<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use common\models\Category;
use common\models\User;

use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute' => 'category_id',
                'filter' => Category::listCategory(),
                'value' => function ($model) {
                    return $model->category->name;
                },
            ],
            [
                'attribute' => 'user_id',
                'filter' => User::listUser(),
                'value' => function ($model) {
                    return $model->user->fullname;
                },
            ],
            'created_at',

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
