<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcParts */

$this->title = 'Update Ac Parts: ' . $model->part_no;
$this->params['breadcrumbs'][] = ['label' => 'Ac Parts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->part_no, 'url' => ['view', 'id' => $model->part_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ac-parts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
