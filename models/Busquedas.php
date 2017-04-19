<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "busquedas".
 *
 * @property integer $idBusqueda
 * @property integer $idRubro
 * @property string $Empresa
 * @property string $Titulo
 * @property string $Descripcion
 */
class Busquedas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'busquedas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRubro', 'Empresa', 'Titulo', 'Descripcion'], 'required'],
            [['idRubro'], 'integer'],
            [['Descripcion'], 'string'],
            [['Empresa', 'Titulo'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idBusqueda' => 'Id Busqueda',
            'idRubro' => 'Id Rubro',
            'Empresa' => 'Empresa',
            'Titulo' => 'Titulo',
            'Descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRubros0()
    {
        return $this->hasOne(Rubros::className(), ['idRubro' => 'idRubro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscripciones()
    {
        return $this->hasMany(Inscripciones::className(), ['idBusqueda' => 'idBusqueda']);
    }

}
