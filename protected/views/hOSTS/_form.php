<?php
/* @var $this HOSTSController */
/* @var $model HOSTS */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hosts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'HOSTNAME'); ?>
		<?php echo $form->textField($model,'HOSTNAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'HOSTNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USER'); ?>
		<?php echo $form->textField($model,'USER',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IP'); ?>
		<?php echo $form->textField($model,'IP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'IP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESC'); ?>
		<?php echo $form->textField($model,'DESC',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DESC'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->