<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EmployeeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'empno') ?>

    <?= $form->field($model, 'emp_name') ?>

    <?= $form->field($model, 'emp_role') ?>

    <?= $form->field($model, 'emp_system_status') ?>

    <?= $form->field($model, 'emp_Join_Date') ?>

    <?php // echo $form->field($model, 'designation') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
