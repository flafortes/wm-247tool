<?php
/* @var $this COMPONENTTYPEController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Componenttypes',
);

$this->menu=array(
	array('label'=>'Create COMPONENTTYPE', 'url'=>array('create')),
	array('label'=>'Manage COMPONENTTYPE', 'url'=>array('admin')),
);
?>

<h1>Componenttypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
