<?php

namespace domain\validators;

use Yii;
use yii\validators\Validator;

class HexColorValidator extends Validator
{
    public $hexColorPattern = '/#([a-f0-9]{3}){1,2}\b/i';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = Yii::t('yii', '{attribute} must be hex color.');
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function validateValue($value)
    {
        if (!preg_match($this->hexColorPattern, $value)) {
            return [$this->message];
        }

        return null;
    }
}