<?php

namespace domain\forms\Shop\Product;

use yii\base\Model;

/**
 * Class ExtensionForm
 * @package domain\forms\Shop\Product
 *
 */
abstract class ExtensionForm extends Model
{
    public function load($data, $formName = null)
    {
        $result = parent::load($data, $formName);
        if (!$result) {
            return false;
        }

        foreach ($this->compositeForms() as $properties => $scope) {

            if (isset($data[$scope[1]])) {
                foreach ($this->$properties as $property) {
                    foreach ($property[$scope[0]] as $val) {
                        $val->setAttributes($data[$scope[1]][$val->id]);
                    }
                }
            } else {
                return false;
            }
        }

        return true;
    }

    public function validate($attributeNames = null, $clearErrors = true)
    {
        $result = parent::validate($attributeNames, $clearErrors);
        if (!$result) {
            return false;
        }

        foreach ($this->compositeForms() as $properties => $scope) {

            foreach ($this->$properties as $property) {
                foreach ($property[$scope[0]] as $val) {
                    if (!$val->validate()) {
                        return false;
                    }
                }
            }
        }

        return true;
    }

    /**
     * @return array of internal forms like ['groups' => ['attributes', 'ValueForm'], 'meta' => ['props', 'MetaForm']]
     */
    abstract protected function compositeForms();
}