<?php

namespace frontend\widgets;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\ActiveField;

class FilterField extends ActiveField
{
    public $template = "{input}";

    private $attributeId;

    public function checkboxList($items, $options = [])
    {
        $this->attributeId = isset($options['attributeId']) ? $options['attributeId'] : null;

        $itemOptions = isset($options['itemOptions']) ? $options['itemOptions'] : [];
        $encode = ArrayHelper::getValue($options, 'encode', true);

        $options['item'] = function ($index, $labelContent, $name, $checked, $value) use ($itemOptions, $encode) {
            $options = array_merge([
                'label' => $encode ? Html::encode($labelContent) : $labelContent,
                'value' => $value
            ], $itemOptions);
            $options['checked'] = (bool) $checked;
            $options['class'] = 'cm-product-filters-checkbox';
            $options['id'] = 'checkbox_' . $this->model->getAttribute0()->id .'_'. $value;

            $name = "v[$this->attributeId]". substr($name, 1);

            $forAttr = $options['id'];
            $label = Html::label($labelContent, $forAttr);
            $input = Html::input('checkbox', $name, $value, $options);

            return '<li class="cm-product-filters-checkbox-container ty-product-filters__group">' . $input. $label . '</li>';
        };

        $this->checkboxS($items, $options);
        return $this;
    }

    private function checkboxS($items, $options = [])
    {
//        if ($this->form->validationStateOn === ActiveForm::VALIDATION_STATE_ON_INPUT) {
//            $this->addErrorClassIfNeeded($options);
//        }

        $this->addAriaAttributes($options);
        $this->adjustLabelFor($options);
        $this->parts['{input}'] = $this->html($this->model, $this->attribute, $items, $options);

        return $this;
    }

    private function html($model, $attribute, $items, $options = [])
    {
        $name = isset($options['name']) ? $options['name'] : Html::getInputName($model, $attribute);
        $selection = isset($options['value']) ? $options['value'] : Html::getAttributeValue($model, $attribute);

        if (!array_key_exists('unselect', $options)) {
            $options['unselect'] = '';
        }
        if (!array_key_exists('id', $options)) {
            $options['id'] = Html::getInputId($model, $attribute);
        }

        return $this->htmlCheckboxList($name, $selection, $items, $options);
    }

    private function htmlCheckboxList($name, $selection = null, $items = [], $options = [])
    {
        if (substr($name, -2) !== '[]') {
            $name .= '[]';
        }
        if (ArrayHelper::isTraversable($selection)) {
            $selection = array_map('strval', (array)$selection);
        }

        $formatter = ArrayHelper::remove($options, 'item');
        $itemOptions = ArrayHelper::remove($options, 'itemOptions', []);
        $encode = ArrayHelper::remove($options, 'encode', true);
        $separator = ArrayHelper::remove($options, 'separator', "\n");
        $tag = ArrayHelper::remove($options, 'tag', 'ul');

        $lines = [];
        $index = 0;
        foreach ($items as $value => $label) {
            $checked = $selection !== null &&
                (!ArrayHelper::isTraversable($selection) && !strcmp($value, $selection)
                    || ArrayHelper::isTraversable($selection) && ArrayHelper::isIn((string)$value, $selection));
            if ($formatter !== null) {
                $lines[] = call_user_func($formatter, $index, $label, $name, $checked, $value);
            } else {
                $lines[] = Html::checkbox($name, $checked, array_merge($itemOptions, [
                    'value' => $value,
                    'label' => $encode ? Html::encode($label) : $label,
                ]));
            }
            $index++;
        }

        if (isset($options['unselect'])) {
            // add a hidden field so that if the list box has no option being selected, it still submits a value
            $name2 = substr($name, -2) === '[]' ? substr($name, 0, -2) : $name;
            $hidden = Html::hiddenInput($name2, $options['unselect']);
            unset($options['unselect']);
        } else {
            $hidden = '';
        }

        $visibleContent = implode($separator, $lines);

        if ($tag === false) {
            return $hidden . $visibleContent;
        }

        $tagUL = Html::beginTag('ul', ['id' => "sw_content_$this->attributeId", 'class' => 'ty-product-filters']);
        $tagLI = Html::beginTag('li', ['class' => 'ty-product-filters__item-more']);

        $characteristicName = $this->model->getAttribute0()->name;

        $divFilterSwitch = "<div id=\"sw_content_$this->attributeId\" class=\"ty-product-filters__switch cm-combination-filter_39_10 open cm-save-state cm-ss-reverse\">
            $hidden
            <span class=\"ty-product-filters__title\">$characteristicName</span>
            <i class=\"ty-product-filters__switch-down ty-icon-down-open\"></i>
            <i class=\"ty-product-filters__switch-right ty-icon-up-open\"></i>
        </div>";

        $option = count($this->model->getAttribute0()->items) > 8 ? ' none-overflow' : '';
        $options['class'] = "ty-product-filters__variants cm-filter-table$option";
        $options['id'] = "content_$this->attributeId";
        $options['style'] = 'max-height: 250px;';

        return $divFilterSwitch . $tagUL . $tagLI . Html::tag($tag, $visibleContent, $options);
    }

    public function render($content = null)
    {
        if ($content === null) {
            if (!isset($this->parts['{input}'])) {
                $this->textInput();
            }
            $content = strtr($this->template, $this->parts);
        } elseif (!is_string($content)) {
            $content = call_user_func($content, $this);
        }

        $begin = Html::beginTag('div', ['class' => 'ty-product-filters__block']);

        return $begin . "\n" . $content . "\n" . '</div>';
    }
}