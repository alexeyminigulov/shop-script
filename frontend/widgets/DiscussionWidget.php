<?php

namespace frontend\widgets;

use yii\base\Widget;
use domain\entities\Shop\Discussion;

class DiscussionWidget extends Widget
{
    /** @var $discussions Discussion[] */
    public $discussions;

    public function run()
    {
        $result = $this->getTemplate();

        return $result;
    }

    private function getTemplate()
    {
        return $this->render('discussions/view', ['discussions' => $this->discussions]);
    }
}