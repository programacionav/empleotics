<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Busquedas */

$this->title = $model->idBusqueda;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Busquedas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="busquedas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idBusqueda], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idBusqueda], [
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
            'idBusqueda',
            'idRubro',
            'Empresa',
            'Titulo',
            'Descripcion:ntext',
        ],
    ]) ?>
    <ul>
<?php
        $inscripciones = $model->inscripciones;
        foreach($inscripciones as $modelInscripcion){
            echo '<li>'.$modelInscripcion->Fecha.' - '. $modelInscripcion->Nombre.' - '.$modelInscripcion->Apellido.'</li>';
        }
 ?>
 </ul>
    

</div>
