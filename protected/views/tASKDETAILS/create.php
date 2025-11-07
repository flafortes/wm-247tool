<?php
/* @var $this TASKDETAILSController */
/* @var $model TASKDETAILS */

$this->breadcrumbs=array(
	'Taskdetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TASKDETAILS', 'url'=>array('index')),
	array('label'=>'Manage TASKDETAILS', 'url'=>array('admin')),
);
?>

<h1>Create TASKDETAILS</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>