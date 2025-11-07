<?php
/* @var $this SERVICEUSAGEController */
/* @var $model SERVICEUSAGE */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'serviceusage-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Running'); ?>
		<?php echo $form->textField($model,'Running',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Running'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AccessLast'); ?>
		<?php echo $form->textField($model,'AccessLast'); ?>
		<?php echo $form->error($model,'AccessLast'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Log'); ?>
		<?php echo $form->textField($model,'Log',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'Log'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->