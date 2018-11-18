<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Supplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'supplier_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_contact_no')->textInput() ?>

    <?= $form->field($model, 'supplier_contact_point')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
