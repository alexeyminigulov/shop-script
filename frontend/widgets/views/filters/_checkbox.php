<?php

/* @var $this \yii\web\View */
/* @var $form \yii\widgets\ActiveForm */
/* @var $valueForm \domain\forms\Shop\Search\ValueForm */

use yii\helpers\ArrayHelper;

?>

<?= $form->field($valueForm, 'value')
    ->checkboxList(
        ArrayHelper::map($valueForm->getAttribute0()->items,'id','option'),
        ['attributeId' => $valueForm->getAttribute0()->id]
    )->error(false)
?>