<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcParts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ac-parts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'part_no')->textInput() ?>

    <?= $form->field($model, 'part_purchursed_date')->textInput() ?>

    <?= $form->field($model, 'part_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part_system_created_time')->textInput() ?>

    <?= $form->field($model, 'part_discription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part_installed_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part_installed_ac_unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_modified_time')->textInput() ?>

    <?= $form->field($model, 'last_modified_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part_useful_life')->textInput() ?>

    <?= $form->field($model, 'part_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part_price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
