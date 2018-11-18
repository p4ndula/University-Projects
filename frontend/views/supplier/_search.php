<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SupplierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'supplier_no') ?>

    <?= $form->field($model, 'supplier_name') ?>

    <?= $form->field($model, 'supplier_type') ?>

    <?= $form->field($model, 's_address') ?>

    <?= $form->field($model, 'supplier_contact_no') ?>

    <?php // echo $form->field($model, 'supplier_contact_point') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
