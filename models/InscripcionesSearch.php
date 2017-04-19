<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inscripciones;

/**
 * InscripcionesSearch represents the model behind the search form about `app\models\Inscripciones`.
 */
class InscripcionesSearch extends Inscripciones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idInscripcion', 'idBusqueda', 'Cuil'], 'integer'],
            [['Fecha', 'Apellido', 'Nombre'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Inscripciones::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idInscripcion' => $this->idInscripcion,
            'idBusqueda' => $this->idBusqueda,
            'Fecha' => $this->Fecha,
            'Cuil' => $this->Cuil,
        ]);

        $query->andFilterWhere(['like', 'Apellido', $this->Apellido])
            ->andFilterWhere(['like', 'Nombre', $this->Nombre]);

        return $dataProvider;
    }
}
