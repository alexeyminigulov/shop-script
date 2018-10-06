<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Product\Value;

class ValueStorageAdapter
{
    private $dataMapper = [];

    public function getMin($attributeId)
    {
        if(!isset($this->dataMapper['getMin']) || !isset($this->dataMapper['getMin'][$attributeId])) {

            $this->dataMapper['getMin'][$attributeId] = Value::find()
                ->where(['attribute_id' => $attributeId])
                ->min('value');
        }

        return $this->dataMapper['getMin'][$attributeId];
    }

    public function getMax($attributeId)
    {
        if(!isset($this->dataMapper['getMax']) || !isset($this->dataMapper['getMax'][$attributeId])) {

            $this->dataMapper['getMax'][$attributeId] = Value::find()
                ->where(['attribute_id' => $attributeId])
                ->max('value');
        }

        return $this->dataMapper['getMax'][$attributeId];
    }
}