<?php
/* @var $this TASKDETAILSController */
/* @var $model TASKDETAILS */

$this->breadcrumbs=array(
	'Taskdetails'=>array('index'),
	$model->PK=>array('view','id'=>$model->PK),
	'Update',
);

$this->menu=array(
	array('label'=>'List TASKDETAILS', 'url'=>array('index')),
	array('label'=>'Create TASKDETAILS', 'url'=>array('create')),
	array('label'=>'View TASKDETAILS', 'url'=>array('view', 'id'=>$model->PK)),
	array('label'=>'Manage TASKDETAILS', 'url'=>array('admin')),
);
?>

<h1>Update TASKDETAILS <?php echo $model->PK; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>