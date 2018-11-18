<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jobs */



$this->title = $model->job_number;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobs-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->job_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->job_number], [
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
            'job_number',
            'job_type_of_failure',
            'job_category',
            'job_status',
            'job_created_time',
            'job_modified_time',
            'job_discription',
            'job_technician_status',
            'job_assigned_technician',
            'job_customer_name',
            'job_customer_address',
            'job_item_serial_number',
            'job_solution',
            'job_completed_date_time',
            'job_completion_period',
            'job_revisit_count',
            'job_customer_contact_point',
            'job_customer_type',
            'job_customer_email:email',
            'job_completion_price',
            'job_payment_status',
            'job_payment_method',
        ],
    ]) ?>

</div>
