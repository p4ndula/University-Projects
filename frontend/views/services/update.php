<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Service */

$this->title = 'Update Service: ' . $model->service_job_number;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->service_job_number, 'url' => ['view', 'id' => $model->service_job_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
