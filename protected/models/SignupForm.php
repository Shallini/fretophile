<?php

/**
 * SignUpForm class.
 * SignUpForm is the data structure for keeping
 * user signup form data. It is used by the 'signup' action of 'SiteController'.
 */
//class SignupForm extends CFormModel
class SignupForm extends CActiveRecord
{
    public $firstname;
	public $lastname;
	public $bussname;
	public $email;
	public $username;
	public $password;
	public $password2;
	public $avatarimage;
	public $usertype;
	public $city;
	public $state;
	public $country;
	public $rememberMe;
	public $verifyCode;

	private $_identity;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password, password2, email', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			//array('password', 'authenticate'),
			// when in register scenario, password must match password2
			array('password', 'compare', 'compareAttribute'=>'password2', 'on'=>'register'),
			// validate email address
			array('email', 'email','checkMX'=>true), 
			// Validating image type
			//array('avatarimage', 'file', 'types'=>'jpg, gif, png'),
			//array('image_name,image_type,image_size,image', 'safe'),
			// verifyCode needs to be entered correctly
			//array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
			
			
		);
	}
	
	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'firstname'=>'First Name','lastname'=>'Last Name','bussname'=>'Bussiness Name','password2'=>'Confirm Password','email' => 'Email','avatarimage'=>'Avatar (Image)','usertype'=>'User Type','city'=>'City','state'=>'State/Province','verifyCode'=>'Verification Code'
		);
	}
	
	public function addUser()
	{
		
		$model = new SignupForm;
		if(isset($_POST['SignupForm']))
		{
		  //$values = $model->setAttributes( $_POST['SignupForm'] );
		  $values = $model->attributes = $_POST['SignupForm'];
		  //$values = $model->attributes = $_POST['User'];
          
		  $model->usertypeid=$values['usertype'];
		  if(isset($values['bussname']))	{
			$model->firstname=$values['bussname'];
		  }else{	  
			$model->firstname=$values['firstname'];
			$model->lastname=$values['lastname'];	
		  }	
	  
		  $model->username = $values['username'];		  
		  $model->password = $this->hashPassword($values['password']);
		  //$model->password = $values['password'];
		  $model->email = $values['email'];	
		  $model->city = $values['city'];
		  
		   if( $model->save() ) {
			  return false;
		  } 
		}
		
		
	} 

	
	
	

	
}
