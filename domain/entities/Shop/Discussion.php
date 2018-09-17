<?php

namespace domain\entities\Shop;

use yii\db\ActiveRecord;
use domain\entities\User;
use domain\entities\Shop\Product\Product;
use yii\helpers\Html;

/**
 * This is the model class for table "shop_discussions".
 *
 * @property int $user_id
 * @property int $product_id
 * @property string $text
 * @property int $rating
 * @property int $status
 *
 * @property User $user
 * @property Product $product
 */
class Discussion extends ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 10;

    public static function create($userId, $productId, $text, $rating): self
    {
        $discussion = new self();
        $discussion->user_id = $userId;
        $discussion->product_id = $productId;
        $discussion->text = Html::encode($text);
        $discussion->rating = $rating;
        $discussion->status = self::STATUS_INACTIVE;

        return $discussion;
    }

    public function edit($text)
    {
        $this->text = $text;
    }

    public function activate()
    {
        if ($this->status == self::STATUS_ACTIVE) {
            throw new \DomainException('Status already is active.');
        }
        $this->status = self::STATUS_ACTIVE;
    }

    public function draft()
    {
        if ($this->status == self::STATUS_INACTIVE) {
            throw new \DomainException('Status already is inactive.');
        }
        $this->status = self::STATUS_INACTIVE;
    }

    /**
     *  ========================== Relation ===========================
     */

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    public static function tableName()
    {
        return '{{%shop_discussions}}';
    }
}