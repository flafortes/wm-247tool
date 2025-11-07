<?php
/* @var $this SERVICEUSAGEController */
/* @var $model SERVICEUSAGE */
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
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Running'); ?>
		<?php echo $form->textField($model,'Running',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AccessLast'); ?>
		<?php echo $form->textField($model,'AccessLast'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Log'); ?>
		<?php echo $form->textField($model,'Log',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->