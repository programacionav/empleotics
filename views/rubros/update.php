<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rubros */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Rubros',
]) . $model->idRubro;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rubros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idRubro, 'url' => ['view', 'id' => $model->idRubro]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rubros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
