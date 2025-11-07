<?php
/* @var $this COMPONENTTYPEController */
/* @var $model COMPONENTTYPE */

$this->breadcrumbs=array(
	'Componenttypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List COMPONENTTYPE', 'url'=>array('index')),
	array('label'=>'Manage COMPONENTTYPE', 'url'=>array('admin')),
);
?>

<h1>Create COMPONENTTYPE</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>