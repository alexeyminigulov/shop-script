<?php

namespace domain\forms\Shop\Discussion;

use yii\base\Model;
use domain\entities\User;
use domain\entities\Shop\Product\Product;

class CommentForm extends Model
{
    public $text;
    public $rating;
    public $productId;
    public $userId;

    public function __construct(User $user, Product $product = null, $config = [])
    {
        $this->userId = $user->id;
        $this->productId = $product ? $product->id : $this->productId;
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['text', 'rating', 'productId'], 'required'],
            [['text'], 'string'],
            [['rating'], 'integer', 'min' => 1, 'max' => 5],
        ];
    }
}