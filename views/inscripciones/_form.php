<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inscripciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inscripciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idBusqueda')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'Fecha')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'Cuil')->textInput() ?>

    <?= $form->field($model, 'Apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
