<?php

namespace domain\entities\Shop\Queries;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "shop_brands".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 */
class DeliveryQuery extends ActiveQuery
{
    public function availableForWeight(int $weight)
    {
        return $this->andWhere(['<', 'min_weight', $weight])
            ->andWhere(['>', 'max_weight', $weight]);
    }
}
