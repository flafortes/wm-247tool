<?php
/* @var $this SERVICEUSAGEController */
/* @var $model SERVICEUSAGE */

$this->breadcrumbs=array(
	'Serviceusages'=>array('index'),
	$model->Name=>array('view','id'=>$model->PK),
	'Update',
);

$this->menu=array(
	array('label'=>'List SERVICEUSAGE', 'url'=>array('index')),
	array('label'=>'Create SERVICEUSAGE', 'url'=>array('create')),
	array('label'=>'View SERVICEUSAGE', 'url'=>array('view', 'id'=>$model->PK)),
	array('label'=>'Manage SERVICEUSAGE', 'url'=>array('admin')),
);
?>

<h1>Update SERVICEUSAGE <?php echo $model->PK; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>