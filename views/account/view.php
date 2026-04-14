<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Application $model */

$this->title = "Заявка №" . $model->id . 'от' . Yii::$app->formatter->asDatetime($model->created_at, 'php:d.m.Y H:i:s');

\yii\web\YiiAsset::register($this);
?>
<div class="application-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Назад', ['update', 'id' => $model->id], ['class' => 'btn btn-outline-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'user_id',
                'value' => $model->user->full_name,
            ],
            'date',
            'time',
            'weight',
            'gabarite',
            'address_start',
            'address_finish',
            [
                'attribute' => 'box_type_id',
                'value' => $model->boxType->title,
            ],
            [
                'attribute' => 'status_id',
                'value' => $model->status->title,
            ],
        ],
    ]) ?>

</div>
