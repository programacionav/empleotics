<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RubrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Rubros');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rubros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Rubros'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php 

        $salida ="<ul>";
        foreach($dataProvider as $rubro){
            $salida .= "<li>".Html::a($rubro->Descripcion,['busquedas/index','BusquedasSearch[idRubro]'=>$rubro->idRubro])."</li>";
        }
        $salida.="</ul>";
        echo $salida;
        ?>

</div>
