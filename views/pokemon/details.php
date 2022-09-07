<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var app\models\Pokemon $model */
$this->title = 'HOME';
?>

<h1 class="text-center">Pokemons</h1>
<div class="container p-5">
    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        <?php foreach ($pokemons as $pokemon) : ?>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="text-center">

                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?= ($pokemon->image); ?>" alt="<?= ($pokemon->name); ?>" height="300">
                            <div class="card-body">
                                <div class="my-2 text-center">
                                    <h1 class="card-title"><?= Html::encode("{$pokemon->name}") ?></h1>
                                </div>
                                <br>
                                <!-- <div class="box">
                                    <div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item" type="button"><i class="fas fa-eye"></i></li>
                                            <li class="list-inline-item" type="button"><i class="fas fa-pencil-alt"></i></li>
                                            <li class="list-inline-item" type="button"><i class="fas fa-trash"></i></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>


<div id="container-pagination">
    <?= LinkPager::widget([
        'pagination' => $pagination,
    ]) ?>
</div>