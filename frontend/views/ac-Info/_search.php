<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ac-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ac_serial_number') ?>

    <?= $form->field($model, 'ac_purchursed_date') ?>

    <?= $form->field($model, 'ac_make_company') ?>

    <?= $form->field($model, 'ac_model_number') ?>

    <?= $form->field($model, 'ac_system_create_time') ?>

    <?php // echo $form->field($model, 'ac_model_type') ?>

    <?php // echo $form->field($model, 'ac_discription') ?>

    <?php // echo $form->field($model, 'ac_installed_customer_no') ?>

    <?php // echo $form->field($model, 'ac_installed_customer_name') ?>

    <?php // echo $form->field($model, 'ac_supplier') ?>

    <?php // echo $form->field($model, 'last_modified') ?>

    <?php // echo $form->field($model, 'last_modified_by') ?>

    <?php // echo $form->field($model, 'ac_userful_time') ?>

    <?php // echo $form->field($model, 'ac_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
