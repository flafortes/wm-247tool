<?php
/* @var $this SERVERSController */
/* @var $model SERVERS */

$this->breadcrumbs=array(
	'Servers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SERVERS', 'url'=>array('index')),
	array('label'=>'Manage SERVERS', 'url'=>array('admin')),
);
?>

<h1>Create SERVERS</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>