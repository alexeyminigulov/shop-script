<?php

namespace domain\forms\Shop;

use yii\base\Model;
use domain\entities\Shop\Filter;

class FilterForm extends Model
{
    public $id;
    public $name;
    public $status;

    public function __construct(Filter $filter = null, $config = [])
    {
        if ($filter) {
            $this->id = $filter->id;
            $this->name = $filter->name;
            $this->status = $filter->status;
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['name', 'status'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['status'], 'in', 'range' => [Filter::STATUS_ACTIVE, Filter::STATUS_HIDE]],
        ];
    }
}