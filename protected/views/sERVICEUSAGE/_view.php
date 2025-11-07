<?php
/* @var $this SERVICEUSAGEController */
/* @var $data SERVICEUSAGE */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PK), array('view', 'id'=>$data->PK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Running')); ?>:</b>
	<?php echo CHtml::encode($data->Running); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AccessLast')); ?>:</b>
	<?php echo CHtml::encode($data->AccessLast); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Log')); ?>:</b>
	<?php echo CHtml::encode($data->Log); ?>
	<br />


</div>