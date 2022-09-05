<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<h1>Pokemons</h1>
<div class="row">


    <?php foreach ($pokemons as $pokemon) : ?>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <a href="#" class="thumbnail">

                <?= Html::img($pokemon->image); ?>
                <?= Html::encode("{$pokemon->name}") ?>
            </a>
        </div>
    <?php endforeach; ?>




</div>

<?= LinkPager::widget(['pagination' => $pagination]) ?>