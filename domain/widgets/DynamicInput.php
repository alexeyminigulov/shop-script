<?php

namespace domain\widgets;

use yii\helpers\Html;
use yii\widgets\InputWidget;

class DynamicInput extends InputWidget
{
    public $data = [];
    /**
     * @var null|array
     */
    private $values;


    public function init()
    {
        parent::init();
        $this->options['data-id'] = $this->options['id'];
        $this->options['data-name'] = isset($this->options['name'])
                                        ? $this->options['name']
                                        : Html::getInputName($this->model, $this->attribute);

        $this->values = Html::getAttributeValue($this->model, $this->attribute);
    }

    public function run()
    {
        $this->registerClientScript();

        echo $this->renderListHtml();

        if ($this->values) {
            echo $this->renderSelectedValues($this->values);
        }

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

    protected function renderListHtml()
    {
        if (!$this->hasModel()) {
            throw new \DomainException("DynamicInput widget working only with model.");
        }
        $this->options['class'] = 'form-control main-select-input';

        $this->options['name'] = $this->options['data-name'] . '[0]';
        $this->options['id'] = $this->options['data-id'] . '-0';

        return $this->dropDownList();
    }

    private function renderSelectedValues(array $values)
    {
        $this->options['class'] = 'form-control';
        $result = '';

        foreach ($values as $id) {

            $i = 500 + intval($id);
            $this->setOptions($i);

            $result .= $this->createTplSelectedValue();
        }

        return $result;
    }

    private function createTplSelectedValue(): string
    {
        $tpl = Html::beginTag('div', ['class' => 'row dynamic-row']);

        $tpl .= Html::beginTag('div', ['class' => 'col-lg-10']);
        $tpl .= $this->dropDownList();
        $tpl .= Html::endTag('div');

        $tpl .= Html::beginTag('div', ['class' => 'col-lg-2']);
        $tpl .= Html::tag('button', 'x', ['class' => 'remove-btn btn btn-danger']);
        $tpl .= Html::endTag('div');

        $tpl .= Html::endTag('div');

        return $tpl;
    }

    /**
     * @param integer $i
     */
    private function setOptions($i)
    {
        $this->options['name'] = $this->options['data-name'] . '[' .$i. ']';
        $this->options['id'] = $this->options['data-id'] . '-' .$i;
    }

    private function dropDownList()
    {
        $selected = $this->values ? array_shift($this->values) : null;

        return Html::dropDownList($this->options['name'], $selected, $this->data, $this->options);
    }
}