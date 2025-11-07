<?php
/* @var $this QUICKCOMMANDSController */
/* @var $model QUICKCOMMANDS */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'quickcommands-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DESC'); ?>
		<?php echo $form->textField($model,'DESC',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMMAND'); ?>
		<?php echo $form->textField($model,'COMMAND',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'COMMAND'); ?>
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