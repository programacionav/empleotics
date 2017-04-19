<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rubros */

$this->title = $model->idRubro;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rubros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rubros-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idRubro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idRubro], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idRubro',
            'Descripcion',
        ],
    ]) ?>

</div>
