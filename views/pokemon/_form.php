<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pokemon */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh; overflow:hidden; border: 2px solid red">

    <!-- Inner row, half the width and height, centered, blue border -->
    <div class="row text-center d-flex align-items-center" style="overflow:hidden; width:50vw; height:50vh; border: 1px solid blue">

        <!-- Innermost text, wraps automatically, automatically centered -->

        <?php $form = ActiveForm::begin(); ?>


        <div>
            <input type="text">
        </div>
        <div>
            <input type="file">
        </div>
        <div>
            <input type="submit">
        </div>



        <?php ActiveForm::end(); ?>





    </div> <!-- Inner row -->
</div> <!-- Outer container -->


<div class="pokemon-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-sm-6">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Your Name', ['style' => 'color:Red']); ?>



    </div>
    <?= Html::img($model->image, ['width' => '60px']); ?>


    <!-- Input para subir imagen -->
    <div class="col-sm-6">
        <?= $form->field($model, 'file')->fileInput(['class' => 'form-control', 'type' => 'file', 'placeholder' => 'Imagen']) ?>
    </div>



    <!-- Input para subir imagen 2
    <div class="col-sm-6">
        <input class="form-control" type="file" id="formFile">
    </div> -->



    <!-- Boton para guardar -->
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>