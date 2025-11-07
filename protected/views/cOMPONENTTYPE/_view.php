<?php
/* @var $this COMPONENTTYPEController */
/* @var $data COMPONENTTYPE */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('CORE_SERVICE')); ?>:</b>
	<?php echo CHtml::encode($data->CORE_SERVICE); ?>
	<br />


</div>