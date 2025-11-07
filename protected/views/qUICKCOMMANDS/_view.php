<?php
/* @var $this QUICKCOMMANDSController */
/* @var $data QUICKCOMMANDS */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PK), array('view', 'id'=>$data->PK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESC')); ?>:</b>
	<?php echo CHtml::encode($data->DESC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMMAND')); ?>:</b>
	<?php echo CHtml::encode($data->COMMAND); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_HOST')); ?>:</b>
	<?php echo CHtml::encode($data->FK_HOST); ?>
	<br />


</div>