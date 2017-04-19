<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InscripcionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inscripciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idInscripcion') ?>

    <?= $form->field($model, 'idBusqueda') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'Cuil') ?>

    <?= $form->field($model, 'Apellido') ?>

    <?php // echo $form->field($model, 'Nombre') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
