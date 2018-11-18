<?php

use yii\helpers\Html;

use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="customer-index">
    <p>
        <?= Html::a('Add Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box box-primary">
        <div class="box-body">
		
	
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'customer_no',
                        'header' => 'Customer Number',
						
						
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'customer_name',
                        'header' => 'Customer Name',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'customer_address',
                        'header' => 'Customer Address',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'customer_rating',
                        'header' => 'Customer Rating',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'customer_contact_no',
                        'header' => 'Contact number',
                        'vAlign' => 'middle',
                    ],
					 ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'customer_contact_point',
                        'header' => 'Contact person',
                        'vAlign' => 'middle',
                    ],
					
					 ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'customer_email',
                        'header' => 'Email',
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
                                return Html::a('View', ['customer/view', 'id' => $model->customer_no], [
                                    'class' => 'btn btn-primary btn-sm',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'bottom',
                                    'title' => 'view',
                                ]);
                            },
                            'update' => function ($url, $model, $key) {
                                return Html::a('Update', ['/customer/update', 'id' => $model->customer_no], [
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