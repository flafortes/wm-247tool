<?php
/* @var $this SERVERSController */
/* @var $model SERVERS */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PK'); ?>
		<?php echo $form->textField($model,'PK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAME'); ?>
		<?php echo $form->textField($model,'NAME',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESC'); ?>
		<?php echo $form->textField($model,'DESC',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_USER'); ?>
		<?php echo $form->textField($model,'IS_USER',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IS_PASS'); ?>
		<?php echo $form->textField($model,'IS_PASS',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PORT'); ?>
		<?php echo $form->textField($model,'PORT',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_HOST'); ?>
		<?php echo $form->textField($model,'FK_HOST'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->