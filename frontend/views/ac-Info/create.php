<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\AcInfo */

$this->title = 'Create Ac Info';
$this->params['breadcrumbs'][] = ['label' => 'Ac Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ac-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
