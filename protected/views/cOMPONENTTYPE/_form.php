<?php
/* @var $this COMPONENTTYPEController */
/* @var $model COMPONENTTYPE */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'componenttype-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAME'); ?>
		<?php echo $form->textField($model,'NAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESC'); ?>
		<?php echo $form->textArea($model,'DESC',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'DESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CORE_SERVICE'); ?>
		<?php echo $form->textField($model,'CORE_SERVICE',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'CORE_SERVICE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->