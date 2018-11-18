<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'empno')->textInput() ?>

    <?= $form->field($model, 'emp_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_role')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_system_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_Join_Date')->textInput() ?>

    <?= $form->field($model, 'designation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
