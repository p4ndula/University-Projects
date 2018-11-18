<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\depdrop\DepDrop;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jobs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobs-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'job_customer_name')->dropDownList(\yii\helpers\ArrayHelper::map(\frontend\models\Customer::find()->asArray()->all(), 'customer_name', 'customer_name'))?>
            <?= $form->field($model, 'job_status')->dropDownList([
                \frontend\models\Jobs::JOB_STATUS_PENDING => 'Pending',
                \frontend\models\Jobs::JOB_STATUS_INPROGRESS => 'Inprogress',
                \frontend\models\Jobs::JOB_STATUS_COMPLETED => 'Completed'
            ])->label('Job Status'); ?>
            <?= $form->field($model, 'job_discription')->dropDownList([
                \frontend\models\Jobs::TECH_STATUS_ASSIGNED => 'Assign',
                \frontend\models\Jobs::TECH_STATUS_RETURNED => 'Return'
            ])->label('Technician Status'); ?>
            <?= $form->field($model, 'job_discription')->textarea(['maxlength' => true]) ?>

        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'job_customer_type')->dropDownList([
                    \frontend\models\Jobs::CUSTOMER_COOPERATE => 'Cooperate',
                    \frontend\models\Jobs::CUSTOMER_PERSONAL => 'Personal'
                ])->label('Customer Type'); ?>
            <?= $form->field($model, 'job_assigned_technician')->textInput(['maxlength' => true])?>
            <?= $form->field($model, 'job_payment_status')->dropDownList([
                \frontend\models\Jobs::PAYMENT_STATUS_COMPLETE=> 'Completed',
                \frontend\models\Jobs::PAYMENT_STATUS_DUE => 'Due',
                \frontend\models\Jobs::PAYMENT_STATUS_PAID => 'Paid'
            ])->label('Payment Status'); ?>
            <?= $form->field($model, 'job_payment_method')->dropDownList([
                \frontend\models\Jobs::PAYMENT_METHOD_AGREEMENT=> 'Agreement',
                \frontend\models\Jobs::PAYMENT_METHOD_CREDIT => 'Credit',
                \frontend\models\Jobs::PAYMENT_METHOD_FREE => 'Free'
            ])->label('Payment Method'); ?>
        </div>



    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-lg']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
