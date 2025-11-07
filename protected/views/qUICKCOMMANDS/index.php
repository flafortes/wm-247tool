<?php
/* @var $this QUICKCOMMANDSController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Quickcommands',
);

$this->menu=array(
	array('label'=>'Create QUICKCOMMANDS', 'url'=>array('create')),
	array('label'=>'Manage QUICKCOMMANDS', 'url'=>array('admin')),
);
?>

<h1>Quickcommands</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
