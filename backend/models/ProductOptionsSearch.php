<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductOptions;

/**
 * ProductOptionsSearch represents the model behind the search form about `app\models\ProductOptions`.
 */
class ProductOptionsSearch extends ProductOptions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['option_id', 'category_id', 'author_id', 'updater_id'], 'integer'],
            [['option_name', 'option_type', 'create_time', 'update_time'], 'safe'],
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
        $query = ProductOptions::find();

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
            'option_id' => $this->option_id,
            'category_id' => $this->category_id,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'author_id' => $this->author_id,
            'updater_id' => $this->updater_id,
        ]);

        $query->andFilterWhere(['like', 'option_name', $this->option_name])
            ->andFilterWhere(['like', 'option_type', $this->option_type]);

        return $dataProvider;
    }
}
