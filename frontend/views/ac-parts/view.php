<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcParts */

$this->title = $model->part_no;
$this->params['breadcrumbs'][] = ['label' => 'Ac Parts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ac-parts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->part_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->part_no], [
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
            'part_no',
            'part_purchursed_date',
            'part_status',
            'part_supplier',
            'part_system_created_time',
            'part_discription',
            'part_installed_customer',
            'part_installed_ac_unit',
            'last_modified_time',
            'last_modified_by',
            'part_useful_life',
            'part_type',
            'part_price',
        ],
    ]) ?>

</div>
