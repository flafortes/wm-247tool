<?php
/* @var $this SERVICEUSAGEController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Serviceusages',
);

$this->menu=array(
	array('label'=>'Create SERVICEUSAGE', 'url'=>array('create')),
	array('label'=>'Manage SERVICEUSAGE', 'url'=>array('admin')),
);
?>

<h1>Serviceusages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
