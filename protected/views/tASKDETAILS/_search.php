<?php
/* @var $this TASKDETAILSController */
/* @var $model TASKDETAILS */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PK'); ?>
		<?php echo $form->textField($model,'PK',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_SERVER'); ?>
		<?php echo $form->textField($model,'FK_SERVER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_COMPONENT_TYPE'); ?>
		<?php echo $form->textField($model,'FK_COMPONENT_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMPONENT_NAME'); ?>
		<?php echo $form->textField($model,'COMPONENT_NAME',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_ACTIVITY'); ?>
		<?php echo $form->textField($model,'FK_ACTIVITY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TASK_ORDER'); ?>
		<?php echo $form->textField($model,'TASK_ORDER'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->