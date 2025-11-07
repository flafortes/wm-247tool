<?php
/* @var $this SERVICEUSAGEController */
/* @var $model SERVICEUSAGE */

$this->breadcrumbs=array(
	'Serviceusages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SERVICEUSAGE', 'url'=>array('index')),
	array('label'=>'Manage SERVICEUSAGE', 'url'=>array('admin')),
);
?>

<h1>Create SERVICEUSAGE</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>