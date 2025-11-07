<?php
/* @var $this TASKDEFINITIONController */
/* @var $model TASKDEFINITION */

$this->breadcrumbs=array(
	'Taskdefinitions'=>array('index'),
	$model->PK,
);

$this->menu=array(
	array('label'=>'List TASKDEFINITION', 'url'=>array('index')),
	array('label'=>'Create TASKDEFINITION', 'url'=>array('create')),
	array('label'=>'Update TASKDEFINITION', 'url'=>array('update', 'id'=>$model->PK)),
	array('label'=>'Delete TASKDEFINITION', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PK),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TASKDEFINITION', 'url'=>array('admin')),
);
?>

<h1>View TASKDEFINITION #<?php echo $model->PK; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PK',
		'TASK_NAME',
		'TASK_DESC',
	),
)); ?>
