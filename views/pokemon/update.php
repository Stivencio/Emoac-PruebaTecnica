<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pokemon $model */


$this->params['breadcrumbs'][] = ['label' => 'Pokemons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pokemon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_updateForm', [
        'model' => $model,
    ]) ?>

</div>
