<?php

namespace domain\forms\Shop;

use yii\base\Model;
use domain\entities\Shop\Discount;

class DiscountForm extends Model
{
    public $id;
    public $percent;
    public $name;
    public $fromDate;
    public $toDate;
    public $sort;

    public function __construct(Discount $discount = null, $config = [])
    {
        if ($discount) {
            $this->id = $discount->id;
            $this->percent = $discount->percent;
            $this->name = $discount->name;
            $this->fromDate = date("Y-m-d", $discount->from_date);
            $this->toDate = date("Y-m-d", $discount->to_date);
            $this->sort = $discount->sort;
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['percent', 'name', 'fromDate', 'toDate', 'sort'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['fromDate', 'toDate'], 'date', 'format' => 'yyyy-MM-dd'],
            [['fromDate', 'toDate'],'validateDates'],
            [['percent', 'sort'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'percent' => 'Percent, %',
        ];
    }

    public function validateDates(){
        if(strtotime($this->toDate) <= strtotime($this->fromDate)){
            $this->addError('fromDate','Please give correct Start and End dates');
            $this->addError('toDate','Please give correct Start and End dates');
        }
    }
}