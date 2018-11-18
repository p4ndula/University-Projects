<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Service */

$this->title = $model->service_job_number;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->service_job_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->service_job_number], [
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
            'service_job_number',
            'service_job_type',
            'service_sheduled_date',
            'service_item_serial_number',
            'service_job_status',
            'service_reshedule_date',
            'service_customer_name',
            'service_customer_contact_no',
            'customer_rating',
            'customer_address',
            'service_job_customer_type',
        ],
    ]) ?>

</div>
