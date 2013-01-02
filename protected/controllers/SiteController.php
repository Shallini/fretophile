<?php
ob_start();
class SiteController extends Controller
{
	public $layout='fretoinner';
	
	
	public function actionIndex()
	{
	     $this->layout = 'fretohome';
		// display the login form
		 $this->render('home');
	}
	
	public function actionProfile()
	{
	     $id = Yii::app()->getRequest()->getQuery('id');
	     $model = $this->loadModel($id);
		 $this->render('profile',array('model'=>$model));
	}
	
    public function init(){
        // register class paths for extension captcha extended
        Yii::$classMap = array_merge( Yii::$classMap, array(
            'CaptchaExtendedAction' => Yii::getPathOfAlias('ext.captchaExtended').DIRECTORY_SEPARATOR.'CaptchaExtendedAction.php',
            'CaptchaExtendedValidator' => Yii::getPathOfAlias('ext.captchaExtended').DIRECTORY_SEPARATOR.'CaptchaExtendedValidator.php'
        ));
    }
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			/* 'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			), */
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'captcha'=>array(
                'class'=>'CaptchaExtendedAction',
            ),
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
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
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
	    $this->layout = 'login';
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model)); 
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
	    $this->layout = 'fretoinner';
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	/**
	 * Display Signup page
	 */
	public function actionSignup()
	{
	    $this->layout = 'login';
		//$model = new SignupForm;
		
		$model = new User;
		if(isset($_POST['User']))
		{
		    $model->attributes=$_POST['User'];
			
		    //$model->setAttributes( $_POST['User'] );			
		    if($model->validate())
		    {
		    
				$rnd = rand(0,9999);  // generate random number between 0-9999
				$uploadedFile=CUploadedFile::getInstance($model,'avatarimage');
				$fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
				$model->avatarimage = $fileName;

				$r = $uploadedFile->saveAs(Yii::app()->basePath.'/../images/avatars/originals/'.$fileName);  // image will uplode to rootDirectory/banner/
				
				$this->widget('ext.SAImageDisplayer', array('image' => "$fileName",'size' => 'thumb','defaultImage' => "$fileName",'group' => 'avatars')); 
				$this->widget('ext.SAImageDisplayer', array('image' => "$fileName",'size' => 'big','defaultImage' => "$fileName",'group' => 'avatars'));
				$this->widget('ext.SAImageDisplayer', array('image' => "$fileName",'size' => 'tiny','defaultImage' => "$fileName",'group' => 'avatars'));
			if($model->addUser($fileName)){
				Yii::app()->user->setFlash('signup','Thank you for signup .');
				$this->refresh();
				//$this->redirect(array('index'));
			}
			else{
			    Yii::app()->user->setFlash('signup','Problem in saving the data');
				$this->refresh();
			}

		    }
		} 
		
		
		// display the login form
		 $this->render('signup',array('model'=>$model));
		 // if it is ajax validation request
		
		/* if(isset($_POST['ajax']) && $_POST['ajax']==='signup-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}  */
		//echo 'error:'.$errors = CActiveForm::validate($model);
		 
		/*$model->avatarimage = CUploadedFile::getInstance($this, 'avatarimage');*/
	
	}
	
	
	public function loadModel($id)
     {
        $model=User::model()->findByPk((int)$id);
         if($model===null)
             throw new CHttpException(404,'The requested page does not exist.');
         return $model;
     }
	 
	 
	/**
	 * Display Edit profile page
	 */
	public function actionEditprofile()
	{//die(Yii::app()->user->id."test");
	    $this->layout = 'instrumentupload';
	    $id = Yii::app()->user->id;	    
	    //$model = User::model()->findByPk($id);
		$model = $this->loadModel($id);
		//$model = new User;
	    
	    if(isset($_POST['User']))
	    {
		
			//$model->attributes = $_POST['User'];
			
			
			
			$attributes = $_POST['User'];
           
			
			// if a new password has been entered
			if ($attributes['newpassword'] !== '') {
				// set scenario 'changePassword' in order 
				// for the compare validator to be called
				$model->setScenario('changePassword');
			}
			
			

		
			//if ($model->validate())
			//{echo 'ddd';
				if ($attributes['newpassword'] !== '') {
				   $model->password = $model->hashPassword($attributes['newpassword']);//, $model->salt
				   $attributes['password'] = $model->password;
			    }
//die($model->password."==".$attributes['newpassword']);
				// the validation has already been done, skipping it with save(false):
				//if($model->save(false))
				//$this->redirect(array('view','id'=>$model->user_id));
				
				
				$condition = array('userid'=>$id);
				//array('author_id'=>$myId)
				User::model()->updateByPk($id,$attributes);
				//if($model->save())
				$this->redirect(array('editprofile','id'=>$id));
		   //}
		
		/* $attributes = $_POST['User'];
		$condition = array('userid'=>$id);
		//array('author_id'=>$myId)
		User::model()->updateByPk($id,$attributes);
		//if($model->save())
		    $this->redirect(array('editprofile','id'=>$id)); */
	    }
	    else
	    {
		$this->render('editprofile',array('model'=>$model));
	    }
	
	//print_r($_POST);
//	  $info =  Yii::app()->user->user_information;
//	    echo '<pre>';
//	print_r($info);die;
		//$model = new User;
//		if (isset($_POST['User'])) {
//		    die("test");
//		}
		
//		 if(isset($_POST))
//		{ print_r($_POST);
//		die;
//		  //if ($model->validate())
//			 {// print_r($_POST['User']);
//			 // $values =  $model->attributes=$_POST['User'];
//			  //$model->city = $values['city'];
//			  // the validation has already been done, skipping it with save(false):
//			     $model->setAttributes($_POST);
//			  if($model->save(false))
//				$this->redirect(array('editprofile','id'=>$model->userid));
//			 
//			 }
//			// else
//			    // die("error");
//		}	 
		 
	}
	
	public function actionCityupdate($id)
	{print_r($_POST);
die();
		$model = $this->loadModel($id, 'User');
		//$model = new User;
		
		if (isset($_POST['User'])) {
            $model->setAttributes($_POST['User']);

            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id_user));
            }
        }

        $this->render('editprofile',array('model'=>$model));
		
	}
	
	public function actionUpdate($id)
	{
	  $model=$this->loadModel($id);
	  if(isset($_POST['User']))
	  {
		$model->attributes=$_POST['User'];

		// if a new password has been entered
		if ($model->new_password !== '') {
		  // set scenario 'changePassword' in order 
		  // for the compare validator to be called
		  $model->setScenario('changePassword');
		}

		if ($model->validate())
		{
		  if ($model->new_password !== '') {
			$model->password = $model->hashPassword($model->new_password, $model->salt);
		  }
		  
		  // the validation has already been done, skipping it with save(false):
		  if($model->save(false))
			$this->redirect(array('view','id'=>$model->user_id));
		}
	  }

	  $this->render('update',array('model'=>$model,));
	}
	
}