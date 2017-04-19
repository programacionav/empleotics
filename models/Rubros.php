<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rubros".
 *
 * @property integer $idRubro
 * @property string $Descripcion
 */
class Rubros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rubros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Descripcion'], 'required'],
            [['Descripcion'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRubro' => 'Id Rubro',
            'Descripcion' => 'Descripcion',
        ];
    }

   /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusquedas()
    {
        return $this->hasMany(Busquedas::className(), ['idRubro' => 'idRubro']);
    }

}
