<?php

namespace domain\widgets;

use yii\helpers\Html;
use yii\widgets\InputWidget;

class DynamicInput extends InputWidget
{
    public $data = [];

    public function init()
    {
        parent::init();
        $this->options['class'] = 'form-control';
        $this->options['data-id'] = $this->options['id'];
        $this->options['id'] .= '-0';
    }

    public function run()
    {
        $this->registerClientScript();

        echo $this->renderListHtml($this->data);

        echo Html::button('Add', [
            'class' => 'add-dynamic-field-btn btn btn-basic',
            'style' => 'margin-top: 5px',
        ]);
    }

    public function registerClientScript()
    {
        $view = $this->getView();
        DynamicInputAsset::register($view);
    }

    protected function renderListHtml($items)
    {
        if (!$this->hasModel()) {
            throw new \DomainException("DynamicInput widget working only with model.");
        }

        $name = isset($this->options['name']) ? $this->options['name'] : Html::getInputName($this->model, $this->attribute);
        if (!array_key_exists('id', $this->options)) {
            $options['id'] = Html::getInputId($this->model, $this->attribute);
        }
        $this->options['data-name'] = $name;
        $this->options['name'] = $name . '[0]';

        return Html::activeDropDownList($this->model, $this->attribute, $items, $this->options);
    }
}