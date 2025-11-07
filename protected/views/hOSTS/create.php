<?php
/* @var $this HOSTSController */
/* @var $model HOSTS */

$this->breadcrumbs=array(
	'Hosts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HOSTS', 'url'=>array('index')),
	array('label'=>'Manage HOSTS', 'url'=>array('admin')),
);
?>

<h1>Create HOSTS</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>