<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inscripciones".
 *
 * @property integer $idInscripcion
 * @property integer $idBusqueda
 * @property string $Fecha
 * @property integer $Cuil
 * @property string $Apellido
 * @property string $Nombre
 */
class Inscripciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inscripciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idBusqueda', 'Fecha', 'Cuil', 'Apellido', 'Nombre'], 'required'],
            [['idBusqueda', 'Cuil'], 'integer'],
            [['Fecha'], 'safe'],
            [['Apellido', 'Nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idInscripcion' => 'Id Inscripcion',
            'idBusqueda' => 'Id Busqueda',
            'Fecha' => 'Fecha',
            'Cuil' => 'Cuil',
            'Apellido' => 'Apellido',
            'Nombre' => 'Nombre',
        ];
    }


/**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBusqueda0()
    {
        return $this->hasOne(Busquedas::className(), ['idBusqueda' => 'idBusqueda']);
    }

}
