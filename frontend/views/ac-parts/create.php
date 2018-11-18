<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\AcParts */

$this->title = 'Create Ac Parts';
$this->params['breadcrumbs'][] = ['label' => 'Ac Parts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ac-parts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
