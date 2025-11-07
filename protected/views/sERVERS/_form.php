<?php
/* @var $this SERVERSController */
/* @var $model SERVERS */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAME'); ?>
		<?php echo $form->textField($model,'NAME',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESC'); ?>
		<?php echo $form->textField($model,'DESC',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'STATUS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IS_USER'); ?>
		<?php echo $form->textField($model,'IS_USER',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'IS_USER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IS_PASS'); ?>
		<?php echo $form->textField($model,'IS_PASS',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'IS_PASS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PORT'); ?>
		<?php echo $form->textField($model,'PORT',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'PORT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_HOST'); ?>
		<?php //echo $form->textField($model,'FK_HOST'); 
		
		echo CHtml::activeDropDownList($model,'FK_HOST', HOSTS::model()->getHosts()); 
		?>
		<?php echo $form->error($model,'FK_HOST'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->