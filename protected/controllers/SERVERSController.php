<?php

class SERVERSController extends Controller
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
				'actions'=>array('index','view', 'GetServers', 'GetServerLog', 'getStats', 'GetHosts', 'GetServerConnections', 'GetConnectionStatistics', 'GetStreamStatus'),
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
		$model=new SERVERS;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SERVERS']))
		{
			$model->attributes=$_POST['SERVERS'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->PK));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SERVERS']))
		{
			$model->attributes=$_POST['SERVERS'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->PK));
		}

		$this->render('update',array(
			'model'=>$model,
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
		$dataProvider=new CActiveDataProvider('SERVERS');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new SERVERS('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SERVERS']))
			$model->attributes=$_GET['SERVERS'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=SERVERS::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='servers-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
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
				        'password' => 'admin007*', 
				
	    				) 

			);  
		
			return $client;
	}

	public function actionGetServers()
	{
		$model = SERVERS::model()->findAll();
		echo CJSON::encode(  array("servers" =>$model));
		

	}
	
	//invoke  example
	//http://54.243.199.100/247tool/index.php/sERVERS/GetServerLog?serverid=1&logtype=error
	public function actionGetServerLog($serverid, $logtype)
	{
			
		
		$client = new SoapClient('http://79.169.195.187:8080/ws/_247tool.ws:getLogData?WSDL',
			    array( 
				        // Stuff for development. 
				        'trace' => 1, 
				        'exceptions' => true, 
				        'cache_wsdl' => WSDL_CACHE_NONE, 
				        'features' => SOAP_SINGLE_ELEMENT_ARRAYS, 
				        'soap_version'   => SOAP_1_2,
				
				        // Auth credentials for the SOAP request. 
				        'login' => 'Administrator', 
				        'password' => 'admin007*', 
				
	    				) 

			);  
		
  			
  			$params = array('logType'=>$logtype);
  			
			
			$soapResponse = $client->__call('getLogData', array($params));
				
			$xml = simplexml_load_string($client->__getLastResponse());
			
			foreach ($xml->xpath('//ArrayOflogResultsItem') as $item)
			{	
				$arrayServiceUsage[] = $this->xml2array($item);

			}
			
			echo CJSON::encode(  array("ServerLog" =>$arrayServiceUsage));
		

	}
	
	
	//CONVERT SIMPLEXML OBJECT INTO PHP ARRAY
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
	
	

	
	
	
	public function actiongetStats()
	{
			
			
			$client = $this->getSoapClient("http://79.169.195.187:8080/ws/_247tool.ws:getServerStatistics?WSDL");

			echo Yii::trace(CVarDumper::dumpAsString($client->__getFunctions()),'getFunctions');
			

        	//get functions and params	
  			$params = array('server'=>"server");
  			$soapResponse = $client->__call('getServerStatistics', array($params));
        	
	        echo Yii::trace(CVarDumper::dumpAsString($client->__getLastResponse()),'getLastResponse');
	           
		
			//echo $session;
			
			
			$xml = simplexml_load_string($client->__getLastResponse());
			//$xml->registerXPathNamespace('ser-root', 'http://rroot.home/_247tool/ws/ServiceUsage');
			foreach ($xml->xpath('//Statistics') as $item)
			{
			  	// do something
			  	$arrayServerStats[] = $this->xml2array($item);
				//echo "<br>".$item->totalMem;
			}
			
			echo CJSON::encode(  array("ServerStats" =>$arrayServerStats));
		
	}
	
	public function actionGetHosts()
	{
		
		$arrayHosts =SERVERS::model()->findAll( 
													array(
															'select'=>'HOSTNAME',
    														'distinct'=>true,
    													 )
												);
												
		echo CJSON::encode(  array("Hosts" =>$arrayHosts));
		
	}
	
	public function actionGetServerConnections()
	{
			$client = $this->getSoapClient("http://79.169.195.187:8080/ws/_247tool.ws:getServerConnections?WSDL");

			//get functions and params	
  			$params = array('server'=>"server");
  			$soapResponse = $client->__call('getServerConns', array($params));
        	
	       // echo Yii::trace(CVarDumper::dumpAsString($client->__getLastResponse()),'getLastResponse');
	           
		
					
			$xml = simplexml_load_string($client->__getLastResponse());
			foreach ($xml->xpath('//ArrayOfconnInfoItem') as $item)
			{
			  	// do something
			  	$arrayServerConn[] = $this->xml2array($item);
				//echo "<br>".$item->totalMem;
			}
			
			echo CJSON::encode(  array("ServerConn" =>$arrayServerConn));
	}
	
	public function actionGetConnectionStatistics($server, $connAlias)
	{
			$client = $this->getSoapClient("http://79.169.195.187:8080/ws/_247tool.ws:getServerConnections?WSDL");

			//get functions and params	
  			$params = array('servername'=>$server, 'aliasName'=>$connAlias);
  			$soapResponse = $client->__call('getConnStatistics', array($params));
        	
	       //echo Yii::trace(CVarDumper::dumpAsString($client->__getLastResponse()),'getLastResponse');
	           
		
		
			$xml = simplexml_load_string($client->__getLastResponse());
			foreach ($xml->xpath('//connectionStatistics') as $item)
			{
			  	// do something
			  	$arrayServerConnStats[] = $this->xml2array($item);
				//echo "<br>".$item->totalMem;
			}
			
			echo CJSON::encode(  array("ServerConnStats" =>$arrayServerConnStats));
	}
	
	
	public function actionGetStreamStatus()
	{
		
		/*$theData = '<?xml version="1.0" encoding="UTF-8"?>
<centovacast>
    <request class="system" method="info">
        <password>69839</password>
        <username>emissao*rcm</username>
    </request>
</centovacast>';
		
		$url = 'http://stream.ptisp.pt/api.php';
		//$credentials = '69839@example.com:password';
		$header_array = array('Expect' => '',
		                'From' => 'User A');
		//$ssl_array = array('version' => SSL_VERSION_SSLv3);
		//$options = array(headers => $header_array,
       // httpauth => $credentials,
       //httpauthtype => HTTP_AUTH_BASIC,
        //protocol => HTTP_VERSION_1_1,
       //ssl => $ssl_array);
                
		//create the httprequest object                
		$httpRequest_OBJ = new HttpRequest($url, HTTP_METH_POST, $options);
		//add the content type
		$httpRequest_OBJ->setContentType = 'Content-Type: text/xml';
		//add the raw post data
		$httpRequest_OBJ->setRawPostData ($theData);
		//send the http request
		$result = $httpRequest_OBJ->send();
		//print out the result
		echo "<pre>"; print_r($result); echo "</pre>";*/
		
		

		
		 $params = array('http' => array(
              'method' => 'POST',
              'content' => '<?xml version="1.0" encoding="UTF-8" ?>
								<centovacast version="2.2.4" host="stream.ptisp.pt">
								    <request class="server" method="getstatus">
								        <password>emissao*rcm</password>
								        <username>69839</username>
								    </request>
								</centovacast>'
            ));
			
			$optional_headers  ='Content-Type: text/xml';
			
		  if ($optional_headers !== null) {
		    $params['http']['header'] = $optional_headers;
		  }
		  $ctx = stream_context_create($params);
		  //echo $ctx;
		  $fp = @fopen("http://stream.ptisp.pt/api.php", 'rb', false, $ctx);
		  if (!$fp) {
		    throw new Exception("Problem with $url, $php_errormsg");
		  }
		  $response = @stream_get_contents($fp);
		  if ($response === false) {
		    throw new Exception("Problem reading data from $url, $php_errormsg");
		  }
		  //return $response;
		  
		  //echo "<pre>"; echo $response; echo "</pre>";
		  
		  //echo Yii::trace(CVarDumper::dumpAsString($response),'Response');
		  echo CJSON::encode(  array("ServerStatus" =>$response));
		
	}	
	
	
	
	
}
