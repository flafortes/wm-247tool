<?php
/* @var $this COMPONENTTYPEController */
/* @var $model COMPONENTTYPE */
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
		<?php echo $form->textField($model,'NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESC'); ?>
		<?php echo $form->textArea($model,'DESC',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CORE_SERVICE'); ?>
		<?php echo $form->textField($model,'CORE_SERVICE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->