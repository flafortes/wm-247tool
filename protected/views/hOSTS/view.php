<?php
/* @var $this HOSTSController */
/* @var $model HOSTS */

$this->breadcrumbs=array(
	'Hosts'=>array('index'),
	$model->PK,
);

$this->menu=array(
	array('label'=>'List HOSTS', 'url'=>array('index')),
	array('label'=>'Create HOSTS', 'url'=>array('create')),
	array('label'=>'Update HOSTS', 'url'=>array('update', 'id'=>$model->PK)),
	array('label'=>'Delete HOSTS', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PK),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HOSTS', 'url'=>array('admin')),
);
?>

<h1>View HOSTS #<?php echo $model->PK; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PK',
		'HOSTNAME',
		'USER',
		'PASSWORD',
		'IP',
		'DESC',
	),
)); ?>
