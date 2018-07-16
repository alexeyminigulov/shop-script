<?php

namespace domain\widgets;

use yii\helpers\Html;
use yii\widgets\InputWidget;

class TypeAttribute extends InputWidget
{
    public $items = [];
    private $typeNameField = 'additionData';

    public function init()
    {
        parent::init();
        if (empty($this->items)) {
            throw new \DomainException('Empty $items parameter.');
        }
        $this->options['name'] = Html::getInputName($this->model, $this->attribute);
        $this->options['data-name-form'] = $this->model->formName();
        $this->options['class'] = 'form-control type-attribute';
        $this->options['data-type-name-field'] = $this->typeNameField;
    }

    public function run()
    {
        $this->registerClientScript();

        echo $this->renderListHtml();
    }

    public function registerClientScript()
    {
        $view = $this->getView();
        TypeAttributeAsset::register($view);
    }

    protected function renderListHtml()
    {
        if (!$this->hasModel()) {
            throw new \DomainException("DynamicInput widget working only with model.");
        }

        return $this->dropDownList();
    }

    private function dropDownList()
    {
        return Html::dropDownList($this->options['name'], null, $this->items, $this->options);
    }
}