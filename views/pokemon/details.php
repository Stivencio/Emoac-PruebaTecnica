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



<?= LinkPager::widget([
    'pagination' => $pagination,
    // 'activePageCssClass' => 'active',
    // 'firstPageLabel' => true,
    // 'lastPageLabel' => true,
    'options' => ['class' => 'pagination',],
    'prevPageLabel' => 'Previous',   // Set the label for the “previous” page button
        'nextPageLabel' => 'Next',   // Set the label for the “next” page button
        'firstPageLabel' => 'First',   // Set the label for the “first” page button
        'lastPageLabel' => 'Last',    // Set the label for the “last” page button
        'nextPageCssClass' => 'next',    // Set CSS class for the “next” page button

        'prevPageCssClass' => 'prev',    // Set CSS class for the “previous” page button
        'firstPageCssClass' => 'first',    // Set CSS class for the “first” page button
        'lastPageCssClass' => 'last',    // Set CSS class for the “last” page button
        'maxButtonCount' => 10,    // Set maximum number of page buttons that can be displayed


]) ?>



<?php
function object_to_array($pagination)
{
    if (is_array($pagination) || is_object($pagination)) {
        $result = [];
        foreach ($pagination as $key => $value) {
            $result[$key] = (is_array($value) || is_object($value)) ? object_to_array($value) : $value;
        }
        return $result;
    }
    return $pagination;
}
?>


<?php print_r($pagination) ?>