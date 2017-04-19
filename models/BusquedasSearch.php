<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Busquedas;

/**
 * BusquedasSearch represents the model behind the search form about `app\models\Busquedas`.
 */
class BusquedasSearch extends Busquedas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idBusqueda', 'idRubro'], 'integer'],
            [['Empresa', 'Titulo', 'Descripcion'], 'safe'],
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
        $query = Busquedas::find();

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
            'idBusqueda' => $this->idBusqueda,
            'idRubro' => $this->idRubro,
        ]);

        $query->andFilterWhere(['like', 'Empresa', $this->Empresa])
            ->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion]);

        return $dataProvider;
    }
}
