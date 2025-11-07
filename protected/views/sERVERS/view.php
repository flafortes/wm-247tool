<?php
/* @var $this SERVERSController */
/* @var $model SERVERS */

$this->breadcrumbs=array(
	'Servers'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List SERVERS', 'url'=>array('index')),
	array('label'=>'Create SERVERS', 'url'=>array('create')),
	array('label'=>'Update SERVERS', 'url'=>array('update', 'id'=>$model->PK)),
	array('label'=>'Delete SERVERS', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PK),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SERVERS', 'url'=>array('admin')),
);
?>

<h1>View SERVERS #<?php echo $model->PK; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PK',
		'NAME',
		'DESC',
		'STATUS',
		'IS_USER',
		'IS_PASS',
		'PORT',
		'FK_HOST',
	),
)); ?>
