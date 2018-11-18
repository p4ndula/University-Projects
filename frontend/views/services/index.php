<?php

use yii\helpers\Html;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="customer-index">
    <p>
        <?= Html::a('Shedule new Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box box-primary">
        <div class="box-body">
		
	
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'service_job_number',
                        'header' => 'Service Number',
						
						
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'service_job_type',
                        'header' => 'Service type',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'service_sheduled_date',
                        'header' => 'Sheduled date',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'service_item_serial_number',
                        'header' => 'AC Serial Number',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'service_job_status',
                        'header' => 'Job Status',
                        'vAlign' => 'middle',
                    ],
					 ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'service_customer_name',
                        'header' => 'Customer name',
                        'vAlign' => 'middle',
                    ],
					
					 ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'service_reshedule_date',
                        'header' => 'Reshedule date',
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
                                return Html::a('View', ['customer/view', 'id' => $model->service_job_number], [
                                    'class' => 'btn btn-primary btn-sm',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'bottom',
                                    'title' => 'view',
                                ]);
                            },
                            'update' => function ($url, $model, $key) {
                                return Html::a('Update', ['/customer/update', 'id' => $model->service_job_number], [
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
