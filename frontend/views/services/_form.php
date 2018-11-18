<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\service;
use frontend\models\Customer;


/* @var $this yii\web\View */
/* @var $model frontend\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>


<?= $form->field($model, 'service_job_type')->dropdownList([
        1 => 'Onsite', 
        2 => 'Offsite'
		
    ],
    ['prompt'=>'Select Job Status']
) ?>

    <?= $form->field($model, 'service_sheduled_date')->Input('date') ?>

    <?= $form->field($model, 'service_item_serial_number')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'service_job_type')->dropdownList([
        1 => 'Pending', 
        2 => 'Sheduled',
		3 => 'Resheduled',
		4 => 'Canceled'
    ],
    ['prompt'=>'Select Job Status']
) ?>

	 <?= $form->field($model, 'service_reshedule_date')->Input('date') ?>

	 <?= $form->field($model,'service_customer_name')->dropDownList(ArrayHelper::map(customer::find()->all(),'customer_name','customer_name','customer_type'),['prompt'=>'Select customer']) ?>

   

    <?= $form->field($model, 'service_customer_contact_no')->textInput() ?>

    <?= $form->field($model, 'customer_rating')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_address')->textInput(['maxlength' => true]) ?>

 



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
