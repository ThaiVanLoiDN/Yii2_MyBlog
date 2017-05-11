<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;
use kartik\file\FileInput;
use common\components\Util;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data'] // important
    ]); ?>  

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(Category::listCategory()) ?>

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

    <?= $form->field($model, 'preview')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6, 'class' => 'ckeditor']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>

    <?php ActiveForm::end(); ?>

</div>
