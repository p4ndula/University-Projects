<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kredible\core\models\LineSearch;
use yii\helpers\ArrayHelper;
use kredible\core\models\Centers;
use yii\helpers\Url;
use kartik\depdrop\DepDrop;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model kredible\core\models\CustomersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="col-md-2 padding-none padding-right">
        <?= $form->field($model, 'id') ?>
    </div>

    <div class="col-md-2 padding-none padding-right">
        <?php
        $anyType = ['' => 'All'];
        $types = ArrayHelper::map(LineSearch::getAllActiveLines(), 'id', 'name');
        $types = $anyType + $types;
        ?>
        <?= $form->field($model, 'line_id')->dropDownList($types, ['id' => 'customers-line_id'])->label('Branch') ?>
    </div>

    <?php if (Yii::$app->params['enableCentersUnderBranch'] == true) { ?>

        <div class="col-md-2 padding-none padding-right">
            <?php
            $all = ['' => 'All'];
            $centers = $all + ArrayHelper::map(Centers::find()->where(['branch_id' => $model->line_id])->all(), 'id', 'name');
            echo $form->field($model, 'center_id')->widget(DepDrop::classname(), [
                'data' => $centers,
                'pluginOptions' => [
                    'depends' => ['customers-line_id'],
                    'placeholder'  => 'All',
                    'url' => Url::to(['groups/get-centers'])
                ]
            ])?>
        </div>
    <?php } ?>

    <div class="col-md-3 padding-none padding-right">
        <?=
        $form->field($model, 'startDate')->label('From Date')->widget(DatePicker::className(), [
                'name' => 'date',
                'value' => $model->startDate,
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'options' => ['placeholder' => 'From Date'],
                'removeButton' => false,
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                    'todayBtn' => true,
                    'todayHighlight' => true,
                ]
            ]
        );
        ?>
    </div>

    <div class="col-md-3 padding-none padding-right">
        <?=
        $form->field($model, 'endDate')->label('To Date')->widget(DatePicker::className(), [
                'name' => 'date',
                'value' => $model->endDate,
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'removeButton' => false,
                'options' => ['placeholder' => 'To Date'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                    'todayBtn' => true,
                    'todayHighlight' => true,
                ]
            ]
        );
        ?>
    </div>

    <div class="col-md-offset-10 col-md-8 " style="margin-top: -62px;">
        <div class="form-group " style="margin-top: 25px;">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary', 'style' => 'width: 74px']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default', 'style' => 'width: 74px']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
