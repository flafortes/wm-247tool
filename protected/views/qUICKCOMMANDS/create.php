<?php
/* @var $this QUICKCOMMANDSController */
/* @var $model QUICKCOMMANDS */

$this->breadcrumbs=array(
	'Quickcommands'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QUICKCOMMANDS', 'url'=>array('index')),
	array('label'=>'Manage QUICKCOMMANDS', 'url'=>array('admin')),
);
?>

<h1>Create QUICKCOMMANDS</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>