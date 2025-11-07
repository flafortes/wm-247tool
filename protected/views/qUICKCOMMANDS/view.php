<?php
/* @var $this QUICKCOMMANDSController */
/* @var $model QUICKCOMMANDS */

$this->breadcrumbs=array(
	'Quickcommands'=>array('index'),
	$model->PK,
);

$this->menu=array(
	array('label'=>'List QUICKCOMMANDS', 'url'=>array('index')),
	array('label'=>'Create QUICKCOMMANDS', 'url'=>array('create')),
	array('label'=>'Update QUICKCOMMANDS', 'url'=>array('update', 'id'=>$model->PK)),
	array('label'=>'Delete QUICKCOMMANDS', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PK),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QUICKCOMMANDS', 'url'=>array('admin')),
);
?>

<h1>View QUICKCOMMANDS #<?php echo $model->PK; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PK',
		'DESC',
		'COMMAND',
		'FK_HOST',
	),
)); ?>
