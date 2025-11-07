<?php
/* @var $this TASKDETAILSController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Taskdetails',
);

$this->menu=array(
	array('label'=>'Create TASKDETAILS', 'url'=>array('create')),
	array('label'=>'Manage TASKDETAILS', 'url'=>array('admin')),
);
?>

<h1>Taskdetails</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
