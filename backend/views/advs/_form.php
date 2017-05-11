<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use common\components\Util;
use common\models\Advs;

/* @var $this yii\web\View */
/* @var $model common\models\Advs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advs-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data'] // important
    ]); ?> 

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_image')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'allowedFileExtensions'=>['jpg', 'gif', 'png'],
            'initialPreview'=>[
                Html::img(Util::getUrlImage($model->image), ['width' => 'auto', 'height' => '100%'])
            ],
            'overwriteInitial'=>true,
            'showUpload' => false,
            'showCaption' => false,
        ]
    ]);
    ?>

    <?= $form->field($model, 'location')->dropDownList(Advs::listLocation()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
