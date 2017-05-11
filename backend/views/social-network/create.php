<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SocialNetwork */

$this->title = 'Create Social Network';
$this->params['breadcrumbs'][] = ['label' => 'Social Networks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-network-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
