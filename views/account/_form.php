<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Application $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="application-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gabarite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_start')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_finish')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'box_type_id')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
