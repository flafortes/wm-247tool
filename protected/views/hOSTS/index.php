<?php
/* @var $this HOSTSController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hosts',
);

$this->menu=array(
	array('label'=>'Create HOSTS', 'url'=>array('create')),
	array('label'=>'Manage HOSTS', 'url'=>array('admin')),
);
?>

<h1>Hosts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
