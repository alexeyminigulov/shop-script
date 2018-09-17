<?php

namespace backend\forms\Blog;

use Yii;
use yii\base\Model;
use domain\entities\Blog\Post;
use yii\data\ActiveDataProvider;

/**
 * GroupSearch represents the model behind the search form of `domain\entities\Blog\Post`.
 *
 * @property int $id
 * @property int $created_at
 * @property string $title
 * @property string $description;
 * @property string $content
 * @property string $photo
 * @property int $status
 */
class PostSearch extends Model
{
    public $id;
    public $created_at;
    public $title;
    public $description;
    public $content;
    public $photo;
    public $status;

    public function rules()
    {
        return [
            [['id', 'created_at', 'status'], 'integer'],
            [['title', 'description', 'content', 'photo'], 'safe'],
        ];
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
        $query = Post::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}