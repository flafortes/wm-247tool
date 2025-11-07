<?php
/* @var $this TASKDETAILSController */
/* @var $data TASKDETAILS */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PK), array('view', 'id'=>$data->PK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_SERVER')); ?>:</b>
	<?php echo CHtml::encode($data->FK_SERVER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_COMPONENT_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->FK_COMPONENT_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMPONENT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->COMPONENT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_ACTIVITY')); ?>:</b>
	<?php echo CHtml::encode($data->FK_ACTIVITY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TASK_ORDER')); ?>:</b>
	<?php echo CHtml::encode($data->TASK_ORDER); ?>
	<br />


</div>