<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jobs */

$this->title = 'Update Jobs: ' . $model->job_number;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->job_number, 'url' => ['view', 'id' => $model->job_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jobs-update">

    <div class="bg-white box box-body box-success">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>

</div>
