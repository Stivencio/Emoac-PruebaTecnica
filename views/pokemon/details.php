<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<div class="container p-5">
    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        <?php foreach ($pokemons as $pokemon) : ?>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="text-center">
                        <div class="img-hover-zoom img-hover-zoom--colorize">
                            <img class="shadow" src="<?=($pokemon->image);?>" alt="<?=($pokemon->name);?> style='width="10" height="10"' ">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="clearfix mb-3">
                        </div>
                        <div class="my-2 text-center">
                            <h1><?= Html::encode("{$pokemon->name}") ?></h1>
                        </div>
                        <div class="mb-3">
                            <h2 class="text-uppercase text-center role">Senior Frontend Developer</h2>
                        </div>
                        <div class="box">
                            <div>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fab fa-github"></i></li>
                                    <li class="list-inline-item"><i class="fab fa-linkedin-in"></i></li>
                                    <li class="list-inline-item"><i class="fab fa-instagram"></i></li>
                                    <li class="list-inline-item"><i class="fab fa-twitter"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>








<h1 class="text-center">Pokemons</h1>
<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="album py-5 bg-light">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="<?= Html::encode($pokemon->image); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center"><?= Html::encode("{$pokemon->name}") ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= LinkPager::widget(['pagination' => $pagination]) ?>