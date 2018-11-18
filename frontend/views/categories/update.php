<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Categories */

$this->title = 'Update Categories: ' . $model->category_number;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category_number, 'url' => ['view', 'id' => $model->category_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
