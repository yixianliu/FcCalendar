<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Slide;

/**
 * SlideSearch represents the model behind the search form about `common\models\Slide`.
 */
class SlideSearch extends Slide
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_key', 'path', 'description', 'is_using'], 'safe'],
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
        $query = Slide::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'c_key', $this->c_key])
            ->andFilterWhere(['like', 'path', $this->path])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'is_using', $this->is_using]);

        return $dataProvider;
    }
}
