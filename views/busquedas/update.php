<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Busquedas */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Busquedas',
]) . $model->idBusqueda;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Busquedas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idBusqueda, 'url' => ['view', 'id' => $model->idBusqueda]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="busquedas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
