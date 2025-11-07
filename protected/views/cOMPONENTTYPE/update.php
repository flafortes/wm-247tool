<?php
/* @var $this COMPONENTTYPEController */
/* @var $model COMPONENTTYPE */

$this->breadcrumbs=array(
	'Componenttypes'=>array('index'),
	$model->NAME=>array('view','id'=>$model->PK),
	'Update',
);

$this->menu=array(
	array('label'=>'List COMPONENTTYPE', 'url'=>array('index')),
	array('label'=>'Create COMPONENTTYPE', 'url'=>array('create')),
	array('label'=>'View COMPONENTTYPE', 'url'=>array('view', 'id'=>$model->PK)),
	array('label'=>'Manage COMPONENTTYPE', 'url'=>array('admin')),
);
?>

<h1>Update COMPONENTTYPE <?php echo $model->PK; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>