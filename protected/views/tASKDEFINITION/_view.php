<?php
/* @var $this TASKDEFINITIONController */
/* @var $data TASKDEFINITION */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PK), array('view', 'id'=>$data->PK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TASK_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->TASK_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TASK_DESC')); ?>:</b>
	<?php echo CHtml::encode($data->TASK_DESC); ?>
	<br />


</div>