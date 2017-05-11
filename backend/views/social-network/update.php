<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SocialNetwork */

$this->title = 'Update Social Network: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Social Networks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="social-network-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
