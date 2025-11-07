<?php
/* @var $this SERVICEUSAGEController */
/* @var $model SERVICEUSAGE */

$this->breadcrumbs=array(
	'Serviceusages'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List SERVICEUSAGE', 'url'=>array('index')),
	array('label'=>'Create SERVICEUSAGE', 'url'=>array('create')),
	array('label'=>'Update SERVICEUSAGE', 'url'=>array('update', 'id'=>$model->PK)),
	array('label'=>'Delete SERVICEUSAGE', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PK),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SERVICEUSAGE', 'url'=>array('admin')),
);
?>

<h1>View SERVICEUSAGE #<?php echo $model->PK; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PK',
		'Name',
		'Running',
		'AccessLast',
		'Log',
	),
)); ?>
