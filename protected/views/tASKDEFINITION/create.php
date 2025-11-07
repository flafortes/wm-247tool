<?php
/* @var $this TASKDEFINITIONController */
/* @var $model TASKDEFINITION */

$this->breadcrumbs=array(
	'Taskdefinitions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TASKDEFINITION', 'url'=>array('index')),
	array('label'=>'Manage TASKDEFINITION', 'url'=>array('admin')),
);
?>

<h1>Create TASKDEFINITION</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>