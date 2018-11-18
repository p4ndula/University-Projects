<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ac-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ac_serial_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_purchursed_date')->textInput() ?>

    <?= $form->field($model, 'ac_make_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_model_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_system_create_time')->textInput() ?>

    <?= $form->field($model, 'ac_model_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_discription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_installed_customer_no')->textInput() ?>

    <?= $form->field($model, 'ac_installed_customer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_modified')->textInput() ?>

    <?= $form->field($model, 'last_modified_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_userful_time')->textInput() ?>

    <?= $form->field($model, 'ac_type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
