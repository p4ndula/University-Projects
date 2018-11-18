<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Supplier */

$this->title = 'Update Supplier: ' . $model->supplier_no;
$this->params['breadcrumbs'][] = ['label' => 'Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->supplier_no, 'url' => ['view', 'id' => $model->supplier_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
