<?php
/* @var $this SERVERSController */
/* @var $data SERVERS */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PK), array('view', 'id'=>$data->PK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAME')); ?>:</b>
	<?php echo CHtml::encode($data->NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESC')); ?>:</b>
	<?php echo CHtml::encode($data->DESC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_USER')); ?>:</b>
	<?php echo CHtml::encode($data->IS_USER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IS_PASS')); ?>:</b>
	<?php echo CHtml::encode($data->IS_PASS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PORT')); ?>:</b>
	<?php echo CHtml::encode($data->PORT); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_HOST')); ?>:</b>
	<?php echo CHtml::encode($data->FK_HOST); ?>
	<br />

	*/ ?>

</div>