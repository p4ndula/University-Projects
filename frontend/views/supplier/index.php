<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="customer-index">
    <p>
        <?= Html::a('Add Supplier', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box box-primary">
        <div class="box-body">
		
	
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'supplier_no',
                        'header' => 'Supplier Number',
						
						
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'supplier_name',
                        'header' => 'Supplier Name',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'supplier_type',
                        'header' => 'Supplier type',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 's_address',
                        'header' => 'Supplier address',
                        'vAlign' => 'middle',
                    ],
                    ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'supplier_contact_no',
                        'header' => 'Contact number',
                        'vAlign' => 'middle',
                    ],
					 ['class' => 'kartik\grid\DataColumn',
                        'attribute' => 'supplier_contact_point',
                        'header' => 'Contact person',
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
                                return Html::a('View', ['customer/view', 'id' => $model->supplier_no], [
                                    'class' => 'btn btn-primary btn-sm',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'bottom',
                                    'title' => 'view',
                                ]);
                            },
                            'update' => function ($url, $model, $key) {
                                return Html::a('Update', ['/customer/update', 'id' => $model->supplier_no], [
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