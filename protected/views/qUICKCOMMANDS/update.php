<?php
/* @var $this QUICKCOMMANDSController */
/* @var $model QUICKCOMMANDS */

$this->breadcrumbs=array(
	'Quickcommands'=>array('index'),
	$model->PK=>array('view','id'=>$model->PK),
	'Update',
);

$this->menu=array(
	array('label'=>'List QUICKCOMMANDS', 'url'=>array('index')),
	array('label'=>'Create QUICKCOMMANDS', 'url'=>array('create')),
	array('label'=>'View QUICKCOMMANDS', 'url'=>array('view', 'id'=>$model->PK)),
	array('label'=>'Manage QUICKCOMMANDS', 'url'=>array('admin')),
);
?>

<h1>Update QUICKCOMMANDS <?php echo $model->PK; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>