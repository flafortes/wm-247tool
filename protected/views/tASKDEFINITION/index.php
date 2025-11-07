<?php
/* @var $this TASKDEFINITIONController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Taskdefinitions',
);

$this->menu=array(
	array('label'=>'Create TASKDEFINITION', 'url'=>array('create')),
	array('label'=>'Manage TASKDEFINITION', 'url'=>array('admin')),
);
?>

<h1>Taskdefinitions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
