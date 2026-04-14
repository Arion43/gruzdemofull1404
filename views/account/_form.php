<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use app\models\BoxType;

/** @var yii\web\View $this */
/** @var app\models\Application $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="application-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'box_type_id')->dropDownList(
        BoxType::getBoxType(), ['prompt' => 'Выберите тип груза']
    ) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gabarite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'time')->textInput(['type' => 'time']) ?>

    <?= $form->field($model, 'address_start')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_finish')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
