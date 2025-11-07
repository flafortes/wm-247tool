<?php
/* @var $this SERVERSController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Servers',
);

$this->menu=array(
	array('label'=>'Create SERVERS', 'url'=>array('create')),
	array('label'=>'Manage SERVERS', 'url'=>array('admin')),
);
?>

<h1>Servers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
