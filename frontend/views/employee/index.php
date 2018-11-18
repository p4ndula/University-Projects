<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="customer-index">
    <p>
        <?= Html::a('Add Technician', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box box-primary">
        <div class="box-body">


            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'empno',
                        'header' => 'Technician Number',


                        'vAlign' => 'middle',
                    ],
                 
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'emp_name',
                        'header' => 'Technician Name',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'emp_system_status',
                        'header' => 'Status',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'emp_Join_Date',
                        'header' => 'Joined Date',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'designation',
                        'header' => 'Technician Designation',
                        'vAlign' => 'middle',
                    ],

                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'address',
                        'header' => 'Address/Contact no',
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
                                return Html::a('View', ['customer/view', 'id' => $model->empno], [
                                    'class' => 'btn btn-primary btn-sm',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'bottom',
                                    'title' => 'view',
                                ]);
                            },
                            'update' => function ($url, $model, $key) {
                                return Html::a('Update', ['/customer/update', 'id' => $model->empno], [
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