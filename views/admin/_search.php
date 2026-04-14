<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use app\models\BoxType;
use app\models\Status;

/** @var yii\web\View $this */
/** @var app\models\ApplicationSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="application-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'box_type_id')->dropDownList(
        BoxType::getBoxType(), ['prompt' => 'Выберите тип груза']
    ) ?>

    <?= $form->field($model, 'status_id')->dropDownList(
        Status::getStatus(), ['prompt' => 'Выберите тип груза']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Найти', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
