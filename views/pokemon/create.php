<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pokemon $model */

$this->title = 'Create Pokemon';
$this->params['breadcrumbs'][] = ['label' => 'Pokemons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pokemon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
