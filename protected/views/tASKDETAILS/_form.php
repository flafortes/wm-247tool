<?php
/* @var $this TASKDETAILSController */
/* @var $model TASKDETAILS */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'taskdetails-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_SERVER'); ?>
		<?php //echo $form->textField($model,'FK_SERVER'); 
		
		echo CHtml::activeDropDownList($model,'FK_SERVER', SERVERS::model()->getServers()); 
		?>
		<?php echo $form->error($model,'FK_SERVER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_COMPONENT_TYPE'); ?>
		<?php //echo $form->textField($model,'FK_COMPONENT_TYPE'); 
		
		echo CHtml::activeDropDownList($model,'FK_COMPONENT_TYPE', COMPONENTTYPE::model()->getComponents()); 
		?>
		<?php echo $form->error($model,'FK_COMPONENT_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMPONENT_NAME'); ?>
		<?php echo $form->textField($model,'COMPONENT_NAME',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'COMPONENT_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_ACTIVITY'); ?>
		<?php //echo $form->textField($model,'FK_ACTIVITY'); 
		echo CHtml::activeDropDownList($model,'FK_ACTIVITY', TASKDEFINITION::model()->getTasks()); 
		?>
		<?php echo $form->error($model,'FK_ACTIVITY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TASK_ORDER'); ?>
		<?php echo $form->textField($model,'TASK_ORDER'); ?>
		<?php echo $form->error($model,'TASK_ORDER'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); 
	
	
	?>

</div><!-- form -->