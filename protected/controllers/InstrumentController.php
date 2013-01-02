<?php

class InstrumentController extends Controller
{
	public $layout='fretoinner';	
	public $image;
	
	/* public function actionCreate()
    {
        $model=new Instrument;  // this is my model related to table
        if(isset($_POST['Instrument']))
        {
            $rnd = rand(0,9999);  // generate random number between 0-9999
            $model->attributes=$_POST['Instrument'];
 
            $uploadedFile=CUploadedFile::getInstance($model,'image');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
            $model->image = $fileName;

            if($model->save())
            {
                $uploadedFile->saveAs(Yii::app()->basePath.'/../banner/'.$fileName);  // image will uplode to rootDirectory/banner/
                $this->redirect(array('admin'));
            }
        }
        $this->render('create',array(
            'model'=>$model,
        ));
    } */
	
	public function actionIndex()
	{
	     /* $model=new Instrument;
		 
		 
		 if(isset($_POST['Instrument']))
		 {
			$model->attributes=$_POST['Instrument'];
			if($model->validate())
			{print_r($_POST);

			
				if($model->addInstrument()){
				exit;
				//Yii::app()->Instrument->setFlash('signup','Thank you for signup .');
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
	     $this->render('instrumentUpload',array('model'=>$model)); */
	}
	
	public function actionAdd()
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
	
	public function actionList()
	{
		$this->layout = 'listingcolumn2';
		
		$criteria = new CDbCriteria(); 
		//$criteria->select = new CDbExpression('t.item_id, t.user_id , t.make_id , t.year, t.description, {{user}}.username');
		//$criteria->select = "item_id, user_id , make_id , year, description, username"; 
		//$criteria->join = "LEFT JOIN {{user}} ON t.user_id = {{user}}.userid"; 
		//$criteria->compare('status',Post::STATUS_ACTIVE); 
		//$criteria->addInCondition('id',array(1,2,3,4,5,6));
		
		
        $inst = Instrument::model()->findAll($criteria);
		/* echo '<pre>';
		print_r($inst);
		echo '</pre>';  */
				
		//$inst = Instrument::model()->findAll();		 
		$this->render('instrumentlist',array('inst' => $inst));	 
	    
	}

	public function actionNew()
	{	     
        $model=new Instrument;  // this is my model related to table
        if(isset($_POST['Instrument']))
        {
            $rnd = rand(0,9999);  // generate random number between 0-9999
            $model->attributes=$_POST['Instrument'];
 
            $uploadedFile=CUploadedFile::getInstance($model,'image');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
            $model->image = $fileName;

            $r = $uploadedFile->saveAs(Yii::app()->basePath.'/../images/users/originals/'.$fileName);  // image will uplode to rootDirectory/banner/
			
			$this->widget('ext.SAImageDisplayer', array('image' => "$fileName",'size' => 'thumb','defaultImage' => "$fileName",'group' => 'users')); 
			$this->widget('ext.SAImageDisplayer', array('image' => "$fileName",'size' => 'big','defaultImage' => "$fileName",'group' => 'users'));
			$this->widget('ext.SAImageDisplayer', array('image' => "$fileName",'size' => 'tiny','defaultImage' => "$fileName",'group' => 'users'));
			/* $image = Yii::app()->image->load(Yii::app()->basePath.'/../banner/'.$fileName);
			$image->resize(400, 100)->rotate(-45)->quality(75)->sharpen(20);
			$image->save(); // or $image->save('images/small.jpg'); */
		}
	     $this->render('instrumentnew',array('model'=>$model));
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


}