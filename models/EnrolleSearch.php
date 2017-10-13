<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Enrolle;

/**
 * EnrolleSearch represents the model behind the search form about `app\models\Enrolle`.
 */
class EnrolleSearch extends Enrolle
{

    public $fullsearch;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gender', 'points', 'resident'], 'integer'],
            [['name', 'last_name', 'group_num', 'email', 'birth_date'], 'safe'],
            [['fullsearch'], 'safe']
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
        $query = Enrolle::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        $query->orFilterWhere(['like', 'name', $this->fullsearch])
            ->orFilterWhere(['like', 'last_name', $this->fullsearch])
            ->orFilterWhere(['like', 'group_num', $this->fullsearch]);

        return $dataProvider;
    }
}
