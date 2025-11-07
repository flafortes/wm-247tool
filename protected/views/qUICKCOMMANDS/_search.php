<?php
/* @var $this QUICKCOMMANDSController */
/* @var $model QUICKCOMMANDS */
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
		<?php echo $form->label($model,'DESC'); ?>
		<?php echo $form->textField($model,'DESC',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMMAND'); ?>
		<?php echo $form->textField($model,'COMMAND',array('size'=>60,'maxlength'=>150)); ?>
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