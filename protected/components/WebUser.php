<?php
 
// this file must be stored in:
// protected/components/WebUser.php
 
class WebUser extends CWebUser {
 
  // Store model to not repeat query.
  private $_model;
 
  // Return first name.
  // access it by Yii::app()->user->first_name
  function getFirst_Name(){
    $user = $this->loadUser(Yii::app()->user->id);
	return $user->firstname;
  }
  
  function getUser_Image(){
    $user = $this->loadUser(Yii::app()->user->id);
	return $user->avatar_location;
  }
 
  // This is a function that checks the field 'role'
  // in the User model to be equal to 1, that means it's admin
  // access it by Yii::app()->user->isAdmin()
  function isAdmin(){
    $user = $this->loadUser(Yii::app()->user->id);
    return intval($user->role) == 1;
  }
 
  // Load user model.
  protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null)
                $this->_model=User::model()->findByPk($id);
        }
        return $this->_model;
    }
	
  function getUser_Information(){
    $user = $this->loadUser(Yii::app()->user->id);
	/* echo '<pre>';
	print_r($user); */
	$userinfo = array('firstname'=>$user->firstname,'lastname'=>$user->lastname,'username'=>$user->username,'email'=>$user->email,'avatar_location'=>$user->avatar_location,'city'=>$user->city,'state'=>$user->state,'country'=>$user->country);
    return $userinfo;
  }
  
  /* public function actionCreate()
	{
		$model=new User;
		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array('model'=>$model,));
	} */
}
?>