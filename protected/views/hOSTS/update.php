<?php
/* @var $this HOSTSController */
/* @var $model HOSTS */

$this->breadcrumbs=array(
	'Hosts'=>array('index'),
	$model->PK=>array('view','id'=>$model->PK),
	'Update',
);

$this->menu=array(
	array('label'=>'List HOSTS', 'url'=>array('index')),
	array('label'=>'Create HOSTS', 'url'=>array('create')),
	array('label'=>'View HOSTS', 'url'=>array('view', 'id'=>$model->PK)),
	array('label'=>'Manage HOSTS', 'url'=>array('admin')),
);
?>

<h1>Update HOSTS <?php echo $model->PK; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>