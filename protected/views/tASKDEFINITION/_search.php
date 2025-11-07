<?php
/* @var $this TASKDEFINITIONController */
/* @var $model TASKDEFINITION */
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
		<?php echo $form->label($model,'TASK_NAME'); ?>
		<?php echo $form->textField($model,'TASK_NAME',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TASK_DESC'); ?>
		<?php echo $form->textArea($model,'TASK_DESC',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->