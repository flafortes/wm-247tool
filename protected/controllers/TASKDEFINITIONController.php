<?php

class TASKDEFINITIONController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'GetAllTasks', 'ExecuteTask'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TASKDEFINITION;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TASKDEFINITION']))
		{
			$model->attributes=$_POST['TASKDEFINITION'];
			if($model->save())
				$this->redirect(array('update','id'=>$model->PK));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		//$modeltaskdetails = TASKDETAILS::model()->
		$modeltaskdetails = new TASKDETAILS;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TASKDEFINITION']))
		{
			$model->attributes=$_POST['TASKDEFINITION'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->PK));
		}

		$this->render('update',array(
			'model'=>$model,
			'modeltaskdetails' => $modeltaskdetails,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TASKDEFINITION');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TASKDEFINITION('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TASKDEFINITION']))
			$model->attributes=$_GET['TASKDEFINITION'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	
	
	
	
	private function getSoapClient( $wsdl)
	{
		$client = new SoapClient($wsdl,
			    array( 
				        // Stuff for development. 
				        'trace' => 1, 
				        'exceptions' => true, 
				        'cache_wsdl' => WSDL_CACHE_NONE, 
				        'features' => SOAP_SINGLE_ELEMENT_ARRAYS, 
				        'soap_version'   => SOAP_1_2,
				
				        // Auth credentials for the SOAP request. 
				        'login' => 'Administrator', 
				        'password' => '', 
				
	    				) 

			);  
		
			return $client;
	}
	
	protected function xml2array($xml) {
	  $arr = array();
	  foreach ($xml as $element) {
	    $tag = $element->getName();
	    $e = get_object_vars($element);
	    if (!empty($e)) {
	      $arr[$tag] = $element instanceof SimpleXMLElement ? $this->xml2array($element) : $e;
	    }
	    else {
	      $arr[$tag] = trim($element);
	    }
	  }
	  return $arr;
	}
	
	
	
	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=TASKDEFINITION::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='taskdefinition-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
	
	public function actionGetAllTasks()
	{
		$arrayTasks = TASKDEFINITION::model()->findAll();
		echo CJSON::encode(  array("Tasks" =>$arrayTasks));		
		
		
	}
	
	public function actionExecuteTask($taskid, $action)
	{
		/*$arrayTasks = TASKDEFINITION::model()->findAll();
		echo CJSON::encode(  array("Tasks" =>$arrayTasks));		
		*/
		$client = $this->getSoapClient("http://79.169.195.187:8080/ws/_247tool.ws:executeTask?WSDL");

		//echo Yii::trace(CVarDumper::dumpAsString($client->__getFunctions()),'getFunctions');
		

    	//get functions and params	
		$params = array('taskid'=>$taskid, 'action'=>$action);
		$soapResponse = $client->__call('executeTask', array($params));
    	
        echo Yii::trace(CVarDumper::dumpAsString($client->__getLastResponse()),'getLastResponse');
           
			
		$xml = simplexml_load_string($client->__getLastResponse());
		//$xml->registerXPathNamespace('ser-root', 'http://rroot.home/_247tool/ws/ServiceUsage');
		foreach ($xml->xpath('//ExecTaskResponse') as $item)
		{
		  	// do something
		  	//print_r($item);
			//echo "<br>";
			//print_r($this->xml2array($item)	);
		  	
		  	$arrayServerStats[] = $this->xml2array($item);
			//echo "<br>".$item->done;
		}
		
		echo CJSON::encode(  array("ExecutedTasks" =>$arrayServerStats));
		
	}
}
