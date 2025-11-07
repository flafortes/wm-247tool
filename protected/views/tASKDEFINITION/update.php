<?php
/* @var $this TASKDEFINITIONController */
/* @var $model TASKDEFINITION */

$this->breadcrumbs=array(
	'Taskdefinitions'=>array('index'),
	$model->PK=>array('view','id'=>$model->PK),
	'Update',
);

$this->menu=array(
	array('label'=>'List TASKDEFINITION', 'url'=>array('index')),
	array('label'=>'Create TASKDEFINITION', 'url'=>array('create')),
	array('label'=>'View TASKDEFINITION', 'url'=>array('view', 'id'=>$model->PK)),
	array('label'=>'Manage TASKDEFINITION', 'url'=>array('admin')),
);
?>

<h1>Paragem :: <?php echo $model->TASK_NAME; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'modeltaskdetails' => $modeltaskdetails)); ?>