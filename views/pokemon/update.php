<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pokemon $model */

$this->title = 'Update';
$this->params['breadcrumbs'][] = ['label' => 'Pokemons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pokemon-update">

    <?= $this->render('_updateForm', [
        'model' => $model,
    ]) ?>

</div>
