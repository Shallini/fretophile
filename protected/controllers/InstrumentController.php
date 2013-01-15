<?php
class InstrumentController extends Controller
{
	public $layout='fretoinner';	
	public $image;
	public $val1;
	public $val2;
	
	private $_indexFiles = '../runtime/search';

	public function actionIndex()
	{
	     
	}
	
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
	
	/**
	* This is the action to for Listing
	**/
	public function actionList()
	{
		$this->layout = 'listingcolumn2';
		
		$criteria = new CDbCriteria(); 		
		$inst = Instrument::model()->findAll($criteria);	 
		$this->render('instrumentlist',array('inst' => $inst));	 
	    
	}
	
	/**
	** For Adding instrument
	**/
	
	public function actionAddInstrument()
	{
	     $model = new Instrument;		 	 
		 $this->layout = 'instrumentupload';
		 if(isset($_POST['Instrument']))
		 {
			$model->attributes=$_POST['Instrument'];
			if($model->validate())
			{		
				if($model->addInstrument()){				
				 //Yii::app()->instrument->setFlash('addinstrument','Thank you for adding instrument .');
				//$this->refresh();
				//$this->redirect(array('index'));
				}
				else	{
			    ////Yii::app()->Instrument->setFlash('signup','Problem in saving the data');
				//$this->refresh();
				//$this->redirect(array('instrument'));
				}
			}
		 }
	     $this->render('instrumentadd',array('model'=>$model));
		  
	}
	
	public function loadModel($id)
     {
        $model=Instrument::model()->findByPk((int)$id);
         if($model===null)
             throw new CHttpException(404,'The requested page does not exist.');
         return $model;
     }
	
	/**
	** This is action for display instrument detail
	**/
	public function actionDetail()
	{
		$this->layout = 'instrumentdetail2column';
		$id = Yii::app()->getRequest()->getQuery('id');		
		$model = $this->loadModel($id);
		$this->render('instrumentDetail',array('model'=>$model));	 
	    
	}
	
	/**
	** This is action for brand name autocomplete 
	**/
	
	public function actionAutocomplete(){
      $res = array();
      $term = Yii::app()->getRequest()->getParam('term', false);
      if ($term)
      {
         // test table is for the sake of this example
         $sql = 'SELECT make_id, name FROM {{make}} where LCASE(name) LIKE :name';
         $cmd = Yii::app()->db->createCommand($sql);
         $cmd->bindValue(":name","%".strtolower($term)."%", PDO::PARAM_STR);
         $res = $cmd->queryAll();
      }
      echo CJSON::encode($res);
      Yii::app()->end();
	}
	
	/**
	** This is action for searching and filteration
	**/
	
	 public function actionSearch()
	{
		$this->layout = 'listingcolumn2';	
		if (($term = Yii::app()->getRequest()->getParam('q', null)) !== null)
		{		    

		//GETTING ITEM ID FROM TAG NAME
		$itemid = "(SELECT DISTINCT (itemid) FROM tbl_tag_lookup WHERE tagid IN (SELECT `tag_id` FROM tbl_tags		WHERE `tag` LIKE '%$term%'))";

		//GETTING MAKE ID FROM BRAND NAME
		$makeid = "(SELECT make_id FROM `tbl_make` WHERE `name` LIKE '%$term%')";

		$sql = "SELECT item_id, type_id,user_id, year, model, make_id, description,forsale FROM tbl_items
				WHERE ((item_id IN $itemid ) OR (make_id IN $makeid) OR year LIKE '$term' OR model LIKE '%$term%'
				OR description LIKE '%$term%')"; 
				
		$sqlAdd ='';
		
		if(isset($_REQUEST['sale'])){		
		  $saleString = substr($_REQUEST['sale'], 1, -1);
		  // calling function to get forsale ids		 
		  $saleIds  = Instrument::model()->selectsale($saleString);
		  $sqlAdd .= " AND forsale IN ($saleIds)";
		  
		}
		if(isset($_REQUEST['poster'])){		
		  $userString = substr($_REQUEST['poster'], 1, -1);
		  // calling function to get type_ids		 
		  $usrIds  = Instrument::model()->selectposter($userString);
		  $sqlAdd .= " AND user_id IN ($usrIds)";
		  
		}
		
		if(isset($_REQUEST['type'])){		
		  $typeString = substr($_REQUEST['type'], 1, -1);
		  // calling function to get type_ids		 
		  $typeId  = Instrument::model()->getItemTypeId($typeString);
		  $sqlAdd .= " AND type_id IN ($typeId)";
		  
		}
		if(isset($_REQUEST['brand'])){		
		  $brandString = substr($_REQUEST['brand'], 1, -1);
		  // calling function to get make_ids		 
		  $brandId  = Instrument::model()->selectBrandId($brandString);
		  $sqlAdd .= " AND make_id IN ($brandId)";
		  
		}
		if(isset($_REQUEST['year'])){		
		  $yearString = substr($_REQUEST['year'], 1, -1);
		  // calling function to get make_ids		 
		  $years  = Instrument::model()->selectyears($yearString);
		  $sqlAdd .= " AND year IN ($years)";		  
		}

		$sql = $sql.''.$sqlAdd;
		$command = Yii::app()->db->createCommand($sql);
		$models = $command->queryAll();
		
		
		//for pagination
		 $count_query = "SELECT count(*) as count FROM tbl_items WHERE ((item_id IN $itemid ) OR (make_id IN $makeid) OR year LIKE '$term' OR model LIKE '%$term%'	OR description LIKE '%$term%') $sqlAdd";
		
		$item_count = Yii::app()->db->createCommand($count_query)->queryScalar();
		$dataProvider=new CSqlDataProvider($sql, array('totalItemCount'=>$item_count,'pagination'=>array(
		'pageSize'=> 5,),));	
		$models = $dataProvider->getData();

		$this->render('instrumentlist', array('results' => $models,'pages' => $dataProvider->pagination ));
		}	
	    
	} 
	
	// For Filter
	
	public function accessRules()
	{
	  return array(
		array('allow',
			  'actions'=>array('ajaxrequest'),
			  'users'=>array('@'),
		),
		// ...
		array('deny',  // deny all users
			  'users'=>array('*'),
		),
	  );
	}
	
	
	public function actionAjaxRequest()
	{	
	    die('jkkkl');
		print_r($_REQUEST);
		//echo '<br>'.Yii::app()->getRequest()->getParam('for_sale');
		 
		  //$val1 = $_POST['val1'];
		  //$val2 = $_POST['val2'];
		 
		  //
		  // Perform processing
		  //
		 
		  //
		  // echo the AJAX response
		  //
		  //$model = $val1;
		  //$this->renderPartial('_view',array('model'=>$model));
		  //echo "some sort of response".$val1;
	 
	}
	
	/**
	** This is action for filtering search
	**/

	public function actionInstrumentFilter()
	{	    
		$this->layout = 'listingcolumn2';	
		
		 /* echo $forSale = Yii::app()->getRequest()->getParam('for_sale');
		 echo $usertypeid = Yii::app()->getRequest()->getParam('usertypeid'); */
		//if (($forSale = Yii::app()->getRequest()->getParam('for_sale', null)) !== null) {
	    if(isset($_GET['forsale'])){
	  
			$forSale = $_GET['forsale'];
		    //$criteria=new CDbCriteria(array(
			//'condition'=>"year LIKE '%$term%' OR model LIKE '%$term%'",
			
			$criteria=new CDbCriteria();
			$criteria->condition = "forsale = $forSale";
		}
		
		if(isset($_GET['tid'])){
		
			$parentMade = $_GET['tid'];
			$criteria=new CDbCriteria();
			$criteria->condition = "type_id = $parentMade";
			
		}
		if(isset($_REQUEST['type'])){
		
		  $typeString = substr($_REQUEST['type'], 1, -1);	

		  // calling function to get type_ids
		 
		  $type  = Instrument::model()->getItemTypeId($typeString);
		  
		  $criteria = new CDbCriteria();
		  $criteria->condition = "type_id IN ($type)";	
		}
		
		if(isset($_GET['mid'])){
		
			$brandMade = $_GET['mid'];
			$criteria=new CDbCriteria();
			$criteria->condition = "make_id = $brandMade";
			
		}
		
		if(isset($_GET['year'])){
		
			$year = $_GET['year'];
			$criteria=new CDbCriteria();
			$criteria->condition = "year = $year";
			
		}
		
		if(isset($_GET['usertype'])){
		
			$id = $_GET['usertype'];
			$criteria = new CDbCriteria();
			$criteria->condition = "user_id in (select userid from {{user}} where usertypeid =$id)";
			
			//$criteria = Instrument::model()->getUserItems($id);
			
		}
		
		$count=Instrument::model()->count($criteria);
		$pages=new CPagination($count);

		// results per page
		$pages->pageSize=6;
		$pages->applyLimit($criteria);
	    $models=Instrument::model()->findAll($criteria);

		$this->render('instrumentlist', array(
		'results' => $models,
			 'pages' => $pages
		)); 
	  
	  Yii::app()->end();
	}

}