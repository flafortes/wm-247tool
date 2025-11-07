<?php
/* @var $this TASKDEFINITIONController */
/* @var $model TASKDEFINITION */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'taskdefinition-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TASK_NAME'); ?>
		<?php echo $form->textField($model,'TASK_NAME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TASK_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TASK_DESC'); ?>
		<?php echo $form->textArea($model,'TASK_DESC',array('rows'=>2, 'cols'=>46)); ?>
		<?php echo $form->error($model,'TASK_DESC'); ?>
	</div>
	

<?php echo shell_exec('whoami'); ?>
	
	
	<?php
	//--------------------- begin new code --------------------------
   // add the (closed) dialog for the iframe
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'cru-dialog',
    'options'=>array(
        'title'=>'Details',
        'autoOpen'=>false,
        'modal'=>false,
        'width'=>500,
        'height'=>300,
    ),
    ));
?>
<iframe id="cru-frame" width="100%" height="100%"></iframe>
<?php
 
$this->endWidget();
//--------------------- end new code --------------------------
	?>
	
	<?php
	
	if(!$model->isNewRecord)
	{
	//echo "ja";
	$modeltaskdetails->FK_ACTIVITY = $model->PK;
	
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'taskdetails-grid',
	'dataProvider'=>$modeltaskdetails->search(),
	'columns'=>array(
		//'PK',
		//'FK_SERVER',
		'COMPONENT_NAME',
		array(
		        'header'=>"Server",
		        'name'=>'FK_SERVER',
		        'value'=>'$data->fKSERVER->NAME',
		        'filter'=>  SERVERS::model()->getServers(),
	         ),
		//'FK_COMPONENT_TYPE',
		  array(
		        'header'=>"Type",
		        'name'=>'FK_COMPONENT_TYPE',
		        'value'=>'$data->fKCOMPONENTTYPE->NAME',
		        'filter'=>  COMPONENTTYPE::model()->getComponents(),
	         ),
		//'FK_ACTIVITY',
		'TASK_ORDER',
		/*array(
			'class'=>'CButtonColumn',
		),*/
		
		array(
				
			'class'=>'CButtonColumn',
						 //'updateButtonUrl'=>'$this->grid->controller->createUrl("update",array("id"=>$data->ID, "asDialog"=>"1", "gridId"=>"main_table"))',
					'buttons'=>array(
						'update'=>
									array(
											'url'=>'$this->grid->controller->createUrl("tASKDETAILS/update",array("id"=>$data->PK, "asDialog"=>"1", "gridId"=>"taskdetails-grid"))',
											'click'=>'function(){$("#cru-frame").attr("src",$(this).attr("href")); $("#cru-dialog").dialog("open");  return false;}',
										 ),
						 'view'=>
									array(
											'url'=>'$this->grid->controller->createUrl("tASKDETAILS/view",array("id"=>$data->PK, "asDialog"=>"1", "gridId"=>"taskdetails-grid"))',
											'click'=>'function(){$("#cru-frame").attr("src",$(this).attr("href")); $("#cru-dialog").dialog("open");  return false;}',
										),
										
										
							'delete'=>
                            			array(
			                                    'visible'=>'false',
                                			 ),
							
									),

			  ),
		
		
	),
));
	
}	

?>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>






<script type="text/javascript">


        
        function jsViewCurso()
        {
	    
           var cursoid =  $('#INSCRICAO_CURSO').val()
           var createurl ="/backoffice/index.php/curso/"+cursoid+"?asDialog=1?gridId=main_table";
            //alert(createurl);
            $("#cru-frame").attr("src",createurl);
            $("#cru-dialog").dialog("open");  
            
            return false;  
        } 
        
        
        function jsShowTurma ()
        {
        	
        	var strstatus =  $('#INSCRICAO_STATUS').val();
        	if (strstatus != "swINSCRICAO/Aceite")
        	{
        		 $('#chooseturma').show();
        		 
        		 if(strstatus == "swINSCRICAO/Matriculado")
				 {
				 	$("#INSCRICAO_AUX_TURMA").prop("disabled", false);
				 }
				 else
				 {
				 	$("#INSCRICAO_AUX_TURMA").prop("disabled", true);
				 }
        	}
        	else
        	{
        		$('#chooseturma').hide();
        	}
        	
        	return false;  
        }
            
</script>






</div><!-- form -->
 


