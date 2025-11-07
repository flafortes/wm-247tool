<?php
/* @var $this TASKDETAILSController */
/* @var $model TASKDETAILS */

$this->breadcrumbs=array(
	'Taskdetails'=>array('index'),
	$model->PK,
);

$this->menu=array(
	array('label'=>'List TASKDETAILS', 'url'=>array('index')),
	array('label'=>'Create TASKDETAILS', 'url'=>array('create')),
	array('label'=>'Update TASKDETAILS', 'url'=>array('update', 'id'=>$model->PK)),
	array('label'=>'Delete TASKDETAILS', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PK),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TASKDETAILS', 'url'=>array('admin')),
);
?>

<h1>View TASKDETAILS #<?php echo $model->PK; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PK',
		'FK_SERVER',
		'FK_COMPONENT_TYPE',
		'COMPONENT_NAME',
		'FK_ACTIVITY',
		'TASK_ORDER',
	),
)); ?>
