<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Advs */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Advs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <style>
        .content img{
            width: 100%;
            max-width: 100%;
            height: auto;
        }
    </style>

    <?php  
        if($model->image == ''){
            $model->image = 'no-image.jpg';
        }
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'link',
            [
                'attribute'=>'image',
                'value'=> '/upload/'.$model->image,
                'format' => ['image',['width'=>'100','height'=>'100']],
            ],
            'location',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
