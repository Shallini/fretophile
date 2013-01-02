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
		  'posts'=>array(self::BELONGS_TO, 'Tags', 'item_id'),
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
