<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcPartsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ac-parts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'part_no') ?>

    <?= $form->field($model, 'part_purchursed_date') ?>

    <?= $form->field($model, 'part_status') ?>

    <?= $form->field($model, 'part_supplier') ?>

    <?= $form->field($model, 'part_system_created_time') ?>

    <?php // echo $form->field($model, 'part_discription') ?>

    <?php // echo $form->field($model, 'part_installed_customer') ?>

    <?php // echo $form->field($model, 'part_installed_ac_unit') ?>

    <?php // echo $form->field($model, 'last_modified_time') ?>

    <?php // echo $form->field($model, 'last_modified_by') ?>

    <?php // echo $form->field($model, 'part_useful_life') ?>

    <?php // echo $form->field($model, 'part_type') ?>

    <?php // echo $form->field($model, 'part_price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
