<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ServicesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'service_job_number') ?>

    <?= $form->field($model, 'service_job_type') ?>

    <?= $form->field($model, 'service_sheduled_date') ?>

    <?= $form->field($model, 'service_item_serial_number') ?>

    <?= $form->field($model, 'service_job_status') ?>

    <?php // echo $form->field($model, 'service_reshedule_date') ?>

    <?php // echo $form->field($model, 'service_customer_name') ?>

    <?php // echo $form->field($model, 'service_customer_contact_no') ?>

    <?php // echo $form->field($model, 'customer_rating') ?>

    <?php // echo $form->field($model, 'customer_address') ?>

    <?php // echo $form->field($model, 'service_job_customer_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
