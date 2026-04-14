<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Application $model */


?>
<div class="application-create">

    <h3>Оформление доставки</h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
