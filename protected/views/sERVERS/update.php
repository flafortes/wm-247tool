<?php
/* @var $this SERVERSController */
/* @var $model SERVERS */

$this->breadcrumbs=array(
	'Servers'=>array('index'),
	$model->NAME=>array('view','id'=>$model->PK),
	'Update',
);

$this->menu=array(
	array('label'=>'List SERVERS', 'url'=>array('index')),
	array('label'=>'Create SERVERS', 'url'=>array('create')),
	array('label'=>'View SERVERS', 'url'=>array('view', 'id'=>$model->PK)),
	array('label'=>'Manage SERVERS', 'url'=>array('admin')),
);
?>

<h1>Update SERVERS <?php echo $model->PK; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>