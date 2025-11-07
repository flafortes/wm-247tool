<?php
/* @var $this HOSTSController */
/* @var $data HOSTS */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PK), array('view', 'id'=>$data->PK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOSTNAME')); ?>:</b>
	<?php echo CHtml::encode($data->HOSTNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER')); ?>:</b>
	<?php echo CHtml::encode($data->USER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IP')); ?>:</b>
	<?php echo CHtml::encode($data->IP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESC')); ?>:</b>
	<?php echo CHtml::encode($data->DESC); ?>
	<br />


</div>