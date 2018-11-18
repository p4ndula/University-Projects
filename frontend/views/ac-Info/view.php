<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcInfo */

$this->title = $model->ac_serial_number;
$this->params['breadcrumbs'][] = ['label' => 'Ac Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ac-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ac_serial_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ac_serial_number], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ac_serial_number',
            'ac_purchursed_date',
            'ac_make_company',
            'ac_model_number',
            'ac_system_create_time',
            'ac_model_type',
            'ac_discription',
            'ac_installed_customer_no',
            'ac_installed_customer_name',
            'ac_supplier',
            'last_modified',
            'last_modified_by',
            'ac_userful_time:datetime',
            'ac_type',
        ],
    ]) ?>

</div>
