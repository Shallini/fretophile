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
	
	public function addInstrument(){
	
		$model = new Instrument;
		
		if(isset($_POST['Instrument']))
		{
			$values = $model->attributes=$_POST['Instrument'];
			//echo '<pre>';print_r($values);echo '</pre>';
			$command = Yii::app()->db->createCommand();
			$command->insert('tbl_tags', array('tag'=>$values['tags'],));
			
			$insert_id = Yii::app()->db->getLastInsertID();
			$inserted_tag_id = $insert_id;
			
			//INSERTING INFORMATION TO MAKE TABLE
			
			$command->insert('{{make}}', array('tagid'=>$inserted_tag_id,'name'=>$values['brand'],'description'=>''));
			$getMakeInsertId = Yii::app()->db->getLastInsertID();
			
			
			//INSERTING INFORMATION TO ITEMS TABLE
			$command->insert('{{items}}', array('user_id'=>Yii::app()->user->id,'make_id'=>$getMakeInsertId,'type_id'=>$values['instrument_type'],'description'=>$values['instrument_desc'],'year'=>$values['year'],'date_created'=>new CDbExpression('NOW()'),'last_modified'=>new CDbExpression('NOW()'),'forsale'=>$values['forsale']));
			$inserted_item_id = Yii::app()->db->getLastInsertID();
			
			//INSERTING INFORMATION TO TAG LOOK UP TABLE
			$command->insert('{{tag_lookup}}', array('tagid'=>$inserted_tag_id,'itemid'=>$inserted_item_id,));
			
			if($command->execute())
			{
			   return true;
			}else{
			  return false;
			}
			
			/* $model->user_id = Yii::app()->user->id;
			//$model->make_id = '';
			$model->site_id = 1;
			$model->type_id = $values['instrument_type'];
			//$model->gallery_id = '';
			$model->model = 1;
			$model->description = $values['instrument_desc'];
			$model->year = $values['year'];
			
			//$model->manufacture_location = 1;
			//$model->date_created = now();
			
			 //if($model->save()) {
				 //return true;
			//}  */
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
	
}
