<?php
/* @var $this COMPONENTTYPEController */
/* @var $model COMPONENTTYPE */

$this->breadcrumbs=array(
	'Componenttypes'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List COMPONENTTYPE', 'url'=>array('index')),
	array('label'=>'Create COMPONENTTYPE', 'url'=>array('create')),
	array('label'=>'Update COMPONENTTYPE', 'url'=>array('update', 'id'=>$model->PK)),
	array('label'=>'Delete COMPONENTTYPE', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PK),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage COMPONENTTYPE', 'url'=>array('admin')),
);
?>

<h1>View COMPONENTTYPE #<?php echo $model->PK; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PK',
		'NAME',
		'DESC',
		'CORE_SERVICE',
	),
)); ?>
