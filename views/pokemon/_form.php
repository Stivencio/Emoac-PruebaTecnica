<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pokemon */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="pokemon-form">
    <?php $form = ActiveForm::begin(); ?>


    <h2>Create Pokemon:</h2>

    <!-- Input para ingresar nombre -->
    <div class="col-sm-12">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'class' => 'input-text'])->label('Name :', ['class' => 'label-custom']); ?>
    </div>

    <!-- Input para ingresar imagen -->
    <div class="col-sm-12">
        <?= $form->field($model, 'file')->fileInput(['class' => 'form-control', 'type' => 'file'])->label('Image :', ['class' => 'label-custom']); ?>
    </div>

    <!-- Boton para guardar -->
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-danger btn-custom']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>