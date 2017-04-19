<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Busquedas */

$this->title = Yii::t('app', 'Create Busquedas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Busquedas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="busquedas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
