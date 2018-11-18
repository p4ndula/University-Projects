<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JobsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pending Jobs';
$this->params['breadcrumbs'][] = 'Pending Jobs';
?>
<div class="jobs-index">
    <p>
        <?= Html::a('Create Job', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box box-primary">
        <div class="box-body">

            <?php
            $exportColumns = [
                ['class' => 'kartik\grid\DataColumn',
                    'attribute' => 'job_number',
                ],
                ['class' => 'kartik\grid\DataColumn',
                    'attribute' => 'job_customer_name',

                ],
                ['class' => 'kartik\grid\DataColumn',
                    'attribute' => 'job_technician_status',

                ],
                ['class' => 'kartik\grid\DataColumn',
                    'attribute' => 'job_payment_method',

                ],
                ['class' => 'kartik\grid\DataColumn',
                    'attribute' => 'job_status',

                ],
                ['class' => 'kartik\grid\DataColumn',
                    'attribute' => 'job_created_time',

                ],
            ]
            ?>

            <?=
            ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $exportColumns,
                'target' => ExportMenu::TARGET_BLANK,
                'fontAwesome' => true,
                'filename' => 'Detail Report',
                'exportConfig' => [
                    ExportMenu::FORMAT_PDF => false,
                    ExportMenu::FORMAT_TEXT => false,
                    ExportMenu::FORMAT_CSV => false,
                    ExportMenu::FORMAT_HTML => false,
                    ExportMenu::FORMAT_EXCEL => false,
                ],

                'dropdownOptions' => [
                    'itemsBefore' => [
                        '<li class="dropdown-header">Export All Data</li>',
                    ],
                ],
            ]);
            ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'job_number',
                        'header' => 'Job Number',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'job_customer_name',
                        'header' => 'Customer Name',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'job_technician_status',
                        'header' => 'Technician Status',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'job_payment_method',
                        'header' => 'Job Payment Method',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'job_status',
                        'header' => 'Status',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'job_created_time',
                        'header' => 'Created Date / Time',
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
                                return Html::a('View', ['jobs/view', 'id' => $model->job_number], [
                                    'class' => 'btn btn-primary btn-sm',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'bottom',
                                    'title' => 'view',
                                ]);
                            },
                            'update' => function ($url, $model, $key) {
                                return Html::a('Update', ['/jobs/update', 'id' => $model->job_number], [
                                    'class' => 'btn btn-warning btn-sm',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'bottom',
                                    'title' => 'update',
                                ]);
                            },
                        ]
                    ],
                ],
                'summary' => false,
                'export' => false,
                'responsive' => true,
            ]); ?>
        </div>
