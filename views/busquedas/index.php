<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BusquedasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Busquedas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="busquedas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idBusqueda',
            
            'Empresa',
            'Titulo',
            'Descripcion:ntext',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{postularse} {view}',
            'buttons' => [
                'postularse'=> function ($url, $model, $key) {
                
                  return Html::a('Postularse',['inscripciones/create','idBusqueda'=>$model->idBusqueda]);
             }
             ]
            ]

        ],
    ]); ?>
</div>
