<?php

/**
 * Instrument class.
 * It is used by the 'instrument' up load action of 'InstrumentController'.
 */

class Instrument extends CActiveRecord
{
	public $instrument_type;
	public $brand;
	public $year;
	public $model;
	public $instrument_desc;
	public $tags;
    public $forsale;
    public $image;
    public $attribute_id;	
	
	private $total;

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
		return '{{items}}';
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
			array('year,brand,tags', 'required'),
			array('last_modified','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'update'),
			array('date_created,last_modified','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert')		
			
		);
	}
	
	public function relations()
	{
	  // NOTE: you may need to adjust the relation name and the related
	  // class name for the relations automatically generated below.
		return array(
		  'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		  'items'=> array(self::BELONGS_TO, 'TagsLookup', 'item_id'),
		  /* 'posts'=>array(self::HAS_MANY, 'Post', 'author_id',
                            'order'=>'posts.create_time DESC',
                            'with'=>'categories'), */
		  //'command' => array(self::BELONGS_TO, 'DmOtaCommand', 'command_id'),
		  //'partner' => array(self::BELONGS_TO, 'DmPartner', 'partner_id'),
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
			'instrument_type'=>'Instrument Type','brand'=>'Brand/Builder','year'=>'Year Made','model'=>'Model','instrument_desc' => 'Instrument Description','tags'=>'Tags','forsale'=>'Is for sale'
		);
	}
	
	public function addCreate(){
	
		$model = new Instrument;
		
		if(isset($_POST['Instrument']))
		{
			//$values = $model->attributes = $_POST['Instrument'];
			$values = $_POST['Instrument'];
			//echo '<pre>';print_r($values);echo '</pre>';		
	
			//INSERTING INFORMATION TO TAG TABLE
			$insertedTagId = $this->addTag($values['tags']);
			
			//INSERTING INFORMATION TO MAKE TABLE			
			$getMakeId = $this->addBrand($insertedTagId,$values['brand']);		

			//INSERTING INFORMATION TO ITEMS TABLE	
			$insertedItemId = $this->addItem($values['instrument_type'],$values['model'],$values['instrument_desc'],$values['year'],$values['forsale'],22);			
   			
			//INSERTING INFORMATION TO TAG LOOK UP TABLE
			$finalRes = $this->addTagLookup($insertedTagId,$insertedItemId);
			/* if(!empty($insertedItemId))
			{
			 echo 'save';
			 return true;
			}else{
			 echo 'notsave';
			 return false;
			} */
			return $finalRes;
		}
	}
	
	public function addItem($insType,$model,$insDesc,$year,$forsale,$getMakeId){
	
		$itemCommand = Yii::app()->db->createCommand();
		$itemCommand->insert('{{items}}', array('user_id'=>Yii::app()->user->id,'make_id'=>$getMakeId,'type_id'=>$insType,'model'=>$model,'description'=>$insDesc,'year'=>$year,'date_created'=>new CDbExpression('NOW()'),'last_modified'=>new CDbExpression('NOW()'),'forsale'=>$forsale));
		
		//$itemCommand->query();
		$inserted_item_id = Yii::app()->db->getLastInsertID();
		
		return $inserted_item_id;
		
	}
	
	public function addTag($tag){
	
		$command = Yii::app()->db->createCommand();
		$selectTag = $this->selectTag($tag);
		
		if(empty($selectTag)){
			$command->insert('tbl_tags', array('tag'=>$tag,));
			$insert_id = Yii::app()->db->getLastInsertID();
			$tagId = $insert_id;
		}else{
		    $tagId = $selectTag;
		}
		return $tagId;
		
	}
	
	public function addBrand($instTagId,$brand){
		
		$command = Yii::app()->db->createCommand();
		$selectMake = $this->selectBrand($brand);
		
		if(empty($selectMake)){
			$command->insert('{{make}}', array('tagid'=>$instTagId,'name'=>$brand,'description'=>''));
		    $getMakeInsertId = Yii::app()->db->getLastInsertID();
			$brandId = $getMakeInsertId;
		}else{
			$brandId = $selectMake;
		}
		
			
		return $brandId;
		
	}
	
	public function selectTag($tag){
		
		$command = Yii::app()->db->createCommand()
								->select('tag_id')
								->from('{{tags}}')		
								->where("tag LIKE '$tag'")		
								->queryRow();
		$tagId = $command['tag_id'];
			
		return $tagId;
		
	}
	
	public function selectBrand($brand){
		
		$command = Yii::app()->db->createCommand()
								->select('make_id')
								->from('{{make}}')		
								->where("name LIKE '$brand'")		
								->queryRow();
		$make = $command['make_id'];
			
		return $make;
		
	}
	
	public function addTagLookup($inserted_tag_id,$inserted_item_id){
		
		$command = Yii::app()->db->createCommand();
		$command->insert('{{tag_lookup}}', array('tagid'=>$inserted_tag_id,'itemid'=>$inserted_item_id,));
		//$insert_id = Yii::app()->db->getLastInsertID();
		
		if($command->execute())
		{
		   return true;
		}else{
		  return false;
		}		
	
		
	}
	
	
	
	
	public function findSimilarInstruments($limit=10,$make=null,$typeid=null){
	
		$models=$this->findAll(array(
			'condition'=>'make_id = '.$make .' AND item_id !='.$typeid,
			'limit'=>$limit,
		));
		
		return $models;
	}
	
	public function forSaleCount(){
	 $forsale = Yii::app()->db->createCommand()
		->select('forsale,count(*) as total')
		->from('{{items}}')		
		->group('forsale')
		//->order('item_id Asc')
		->queryAll();

	   return $forsale;
     }	
	 
	
	 
	public function getParentInstruments(){
	
		$instrument = Yii::app()->db->createCommand()
		->select('type_id,name')
		->from('{{itemtype}}')		
		->where('parentid=0')
		//->group('name')		
		->queryAll();

	   return $instrument;
		
	}
	
	public function getChildInstruments(){
	
		$instrument = Yii::app()->db->createCommand()
		->select('type_id,name')
		->from('{{itemtype}}')		
		->where('parentid != 0')
		//->group('name')		
		->queryAll();

	   return $instrument;
		
	}
	
	
	
	public function getBrands(){
	
		$brands = Yii::app()->db->createCommand()
					->select('make_id,name')
					->from('{{make}}')
					//->group('name')		
					->queryAll();

	   return $brands;
		
	}
	
	public function getYearCount(){
	 $years = Yii::app()->db->createCommand()
		->select('year,count(*) as total')
		->from('{{items}}')		
		->group('year')
		->order('year Asc')
		->queryAll();

	   return $years;
     }	

	 public function getUserType(){

		$userType = Yii::app()->db->createCommand()
		->select('userid,usertypeid')
		->from('{{user}}')		
		->queryAll();

	   return $userType;
		
	}
	
	public function getUserTypeName(){

		$userTypeNames = Yii::app()->db->createCommand()
		->select('usertypeid,name')
		->from('{{usertype}}')
        //->where("usertypeid = $id")		
		->queryAll();
		//$userTypeName = $userTypeNames['name'];
	   return $userTypeNames;
		
	}
	
	public function getItemsTypeCount($item=null){	
	
		$typesCount = Yii::app()->db->createCommand()
			->select('count(*) as total')
			->from('{{items}}')	
			->where('type_id=:type_id', array(':type_id'=>$item))		
			->queryRow();    
		   $itemTotal = $typesCount['total'];	    
		   return $itemTotal;
		
		
     }	
	 
	 public function getItemsBrandCount($item=null){	
	
		$typesCount = Yii::app()->db->createCommand()
			->select('count(*) as total')
			->from('{{items}}')	
			->where('make_id=:make_id', array(':make_id'=>$item))		
			->queryRow();    
		   $itemTotal = $typesCount['total']; 
	   
		   return $itemTotal;
	
     }	
	 
	 public function getItemsUserCount($utid=null){

		/* $uItemCount = Yii::app()->db->createCommand()
			->select('count(*) as total')
			->from('{{items}}')	
			->where('user_id=:user_id', array(':user_id'=>$utid))		
			->queryRow(); */
			$sql = "select count(*) as total from {{items}} where user_id in (select userid from {{user}} where usertypeid =$utid)";
			$command = Yii::app()->db->createCommand($sql);
			$uItemCount = $command->queryRow();
			
		   $uItemTotal = $uItemCount['total']; 
	   
		   return $uItemTotal;
		
	}
	
	public function getUserItems($utid=null){
		
			$sql = "select item_id,year,model from {{items}} where user_id in (select userid from {{user}} where usertypeid =$utid)";
			$command = Yii::app()->db->createCommand($sql);
			$uItems = $command->queryAll();
	   
		    return $uItems;
		
	}
	
	public function beforeSave() {
		if ($this->isNewRecord){
			$this->date_created = new CDbExpression('NOW()');
			$this->last_modified = new CDbExpression('NOW()');
		}
		else{
			$this->last_modified = new CDbExpression('NOW()');
		}
		return parent::beforeSave();
	}
	
	public static function usersAutoComplete($name='') {
 
        // Recommended: Secure Way to Write SQL in Yii 
        $sql= 'SELECT make_id ,name FROM {{make}} WHERE name LIKE :name';
        $name = $name.'%';
        return Yii::app()->db->createCommand($sql)->queryAll(true,array(':name'=>$name));
 
        // Not Recommended: Simple Way for those who can't understand the above way.
    // Uncomment the below and comment out above 3 lines 
    /*
    $sql= "SELECT id ,title AS label FROM users WHERE title LIKE '$name%'";
        return Yii::app()->db->createCommand($sql)->queryAll();
    */
 
    }
	
}
