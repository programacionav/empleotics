<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inscripciones */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Inscripciones',
]) . $model->idInscripcion;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Inscripciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idInscripcion, 'url' => ['view', 'id' => $model->idInscripcion]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="inscripciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
