<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcInfo */

$this->title = 'Update Ac Info: ' . $model->ac_serial_number;
$this->params['breadcrumbs'][] = ['label' => 'Ac Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ac_serial_number, 'url' => ['view', 'id' => $model->ac_serial_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ac-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
