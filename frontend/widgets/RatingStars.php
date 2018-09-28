<?php

namespace frontend\widgets;

use yii\base\Widget;
use domain\entities\Shop\Manager\Banner;

class RatingStars extends Widget
{
    /** @var $rating float */
    public $rating;

    public function run()
    {
        $result = $this->getTemplate();

        return $result;
    }

    private function getTemplate()
    {
        return $this->render('ratingStars/view', ['rating' => $this->rating]);
    }
}