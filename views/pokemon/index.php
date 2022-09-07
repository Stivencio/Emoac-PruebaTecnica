<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use \app\models\Pokemon;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PokemonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pokemons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pokemon-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pokemon', ['create'], ['class' => 'btn btn-danger btn-custom']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
            'format'=>'html',
            'value'=>function($data){return Html::img($data->image,['width'=>'60px']);},
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pokemon $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
