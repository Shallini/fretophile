<?php
//ob_start();
class User extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'tbl_user':
	 * @var integer $id
	 * @var string $username
	 * @var string $password
	 * @var string $salt
	 * @var string $email
	 * @var string $profile
	 */
	const WEAK = 0;
    const STRONG = 1;
	
	public $firstname;
	public $lastname;
	public $bussname;
	public $email;
	public $username;
	public $password;
	public $password1;
	public $password2;
	public $avatarimage;
	public $usertype;
	public $city;
	public $state;
	public $country;
	public $rememberMe;
	public $verifyCode;
	public $newpassword;
	public $newpassword2;

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
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			/* array('username, password, salt, email', 'required'),
			array('username, password, salt, email', 'length', 'max'=>128),
			array('profile', 'safe'), */
			// username and password are required
			array('username, password1, password2, email', 'required'),
			// rememberMe needs to be a boolean
			//array('rememberMe', 'boolean'),
			// password needs to be authenticated
			//array('password', 'authenticate'),
			//array('password', 'passwordStrength', 'strength'=>self::STRONG),
			// when in register scenario, password must match password2
			array('password1', 'compare', 'compareAttribute'=>'password2', 'on'=>'insert, changePassword'),
			array('newpassword', 'compare', 'compareAttribute'=>'newpassword2', 'on'=>'insert, changePassword'),
			// validate email address
			array('email', 'email','checkMX'=>true), 
			// Validating image type
			//array('avatarimage', 'file', 'types'=>'jpg, gif, png'),
			//array('image_name,image_type,image_size,image', 'safe'),
			// verifyCode needs to be entered correctly
			//array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
			//array('verifyCode', 'CaptchaExtendedValidator', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			//'posts' => array(self::HAS_MANY, 'Post', 'author_id'),
		);
	}
	
	/**
	 * check if the user password is strong enough
	 * check the password against the pattern requested
	 * by the strength parameter
	 * This is the 'passwordStrength' validator as declared in rules().
	 */
	public function passwordStrength($attribute,$params)
	{
		if ($params['strength'] === self::WEAK)
			$pattern = '/^(?=.*[a-zA-Z0-9]).{5,}$/';  
		elseif ($params['strength'] === self::STRONG)
			$pattern = '/^(?=.*\d(?=.*\d))(?=.*[a-zA-Z](?=.*[a-zA-Z])).{5,}$/';  
	 
		if(!preg_match($pattern, $this->$attribute))
		  $this->addError($attribute, 'your password is not strong enough!');
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(			
			'firstname'=>'First Name',
			'lastname'=>'Last Name',
			'bussname'=>'Bussiness Name',
			'password2'=>'Confirm Password',
			'email' => 'Email',
			'avatarimage'=>'Avatar (Image)',
			'usertype'=>'User Type',
			'city'=>'City',
			'state'=>'State/Province',
			'verifyCode'=>'Verification Code',
			/* 'username' => 'Username',
			'password' => 'Password',
			'salt' => 'Salt',
			'email' => 'Email',
			'profile' => 'Profile', */
		);
	}

	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	/* public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->salt)===$this->password;
	} */
	
	public function validatePassword($password)
	{
		return $this->hashPassword($password)===$this->password;
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @param string salt
	 * @return string hash
	 */
	/* public function hashPassword($password,$salt)
	{
		return md5($salt.$password);
	} */
	public function hashPassword($password)
	{
		return md5($password);
	}

	/**
	 * Generates a salt that can be used to generate a password hash.
	 * @return string the salt
	 */
	protected function generateSalt()
	{
		return uniqid('',true);
	}
	
	public function addUser($filename)
	{
		//$model=new SignupForm;
		$model = new User;
		
		if(isset($_POST['User']))
		{
		  //$values = $model->setAttributes( $_POST['SignupForm'] );	 
		  $values = $model->attributes=$_POST['User'];
          $model->usertypeid=$values['usertype'];
		  
		  if(isset($values['bussname']) && (!empty($values['bussname'])))	{
			$model->firstname=$values['bussname'];
		  }else{	  
			$model->firstname=$values['firstname'];
			$model->lastname=$values['lastname'];	
		  }	
		  $model->username = $values['username'];		  
		  $model->password = $this->hashPassword($values['password1']);
		  $model->email = $values['email'];	
		  $model->city = $values['city'];
		  $model->avatar_location = 'images/avatars/originals/'.$filename;
				
		  
		  if($this->Userexist() == 2){
			$this->addError('email','Email already exist');
			return false;
		  }
		  else if($this->Userexist() == 3){
			$this->addError('username','username already exist');
			return false;
		  }
		  else{
			  if($model->save()) {
				
				  return true;
			  }
		  }
		  /* else if($this->Usernameexist() == 1){
		    $this->addError('username','Username already exist');
			return false;
		  } */
		  
		}	 
	} 
	
	public function Userexist()
	{
	 
		 $user = User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		 //echo $this->Useremailexist();
		 if(($user!=null) && !empty($user)){		 
		  return 3;
		 }			
		 //else if($this->Useremailexist() == 1){
		  //return 2;
		 //}
			//$this->errorCode=self::ERROR_PASSWORD_INVALID;
		 //'username'=>strtolower($this->username),
		 /* $userinfo=User::model()->findByAttributes(array('email'=>$this->email,'username'=>$this->username));
		 $username = $userinfo->username;
		 $email = $userinfo->email; */
		 /* $model = new User;
		 $model->findByAttributes(array('email'=>$this->email,'username'=>$this->username));
		 echo $username = $model->username;
		 echo $email = $model->email; */
		 
		 /* $userinfo=User::model()->findByAttributes(array('email'=>$this->email,'username'=>$this->username));
		 $username = $userinfo->username;
		 $email = $userinfo->email;

		if(($email!=null) && !empty($email)){
			//$this->errorCode=self::ERROR_USERNAME_INVALID;			
			//Yii::app()->user->setFlash('signup','email already exist');			
			return 2;
		}
		else if(($username!=null) && !empty($username)){
		    return 3;
		}
		else{
			return 0;
		} */
		
	}
	
	public function Useremailexist()
	{
	    $model = new User;
		$model->findByAttributes(array('email'=>$this->email));				
		$email = $model->email;
		
		if(($email!=null) && !empty($email)){
			//Yii::app()->user->setFlash('signup','email already exist');
			return true;
		}		
		else
		{
			return false;
		}
		
	}
	
	public function Usernameexist()
	{
		//$user=User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		//'username'=>strtolower($this->username),
		$model = new User;
		$model->findByAttributes(array('username'=>$this->username));		
		$user = $model->username;
		
		if(($user!=null) && !empty($user))
		{		   
			return true;
		}
		else{
			return false;
		}
		
	}
	
	

	
	 /* public function beforeSave()
	{
	    //if(parent::beforeSave())
		//{
		   //if($this->isNewRecord)
			//{
			  $model = new User;
			  print_r($model->getErrors());
	          $this->Userexist();
			  
			  return false;
			//}
		//}else{
		 // return false;
		//}
		/*if ($file = CUploadedFile::getInstance($this, 'avatarimage'))
		{
			$this->image_name = $file->name;
			$this->image_type = $file->type;
			$this->image_size = $file->size;
			$this->image = file_get_contents($file->tempName);
		}
     
		//return parent::beforeSave();
	}  */
}