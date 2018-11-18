<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="customer-index">
    <p>
        <?= Html::a('Create Categories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box box-primary">
        <div class="box-body">


            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'category_name',
                        'header' => 'Category name',


                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'failure_no',
                        'header' => 'Lined Type of Failure',
                        'vAlign' => 'middle',
                    ],

                    ['class' => 'kartik\grid\ActionColumn',
                        'width' => '20%',
                        'header' => '',
                        'header' => 'Actions',
                        'template' => '{view}{update}',
                        'visibleButtons' => [
                            'update' => Yii::$app->user->can('admin')
                        ],
                        'buttons' => [
                            'view' => function ($url, $model, $key) {
                                return Html::a('View', ['customer/view', 'id' => $model->category_number], [
                                    'class' => 'btn btn-primary btn-sm',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'bottom',
                                    'title' => 'view',
                                ]);
                            },
                            'update' => function ($url, $model, $key) {
                                return Html::a('Update', ['/customer/update', 'id' => $model->category_number], [
                                    'class' => 'btn btn-warning btn-sm',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'bottom',
                                    'title' => 'update',
                                ]);
                            },
                        ]
                    ],
                ],
                'summary' => true,
                'export' => false,
                'responsive' => true,

            ]); ?>

        </div>