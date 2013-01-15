<?php

Yii::import('zii.widgets.CPortlet');

class Search extends CPortlet
{
	//public $title='Search';
	//public $maxItems=20;
   
   // Store model to not repeat query.
    private $_model;
	
	
 
    protected function renderContent()
    {
           echo "<div class=\"topsearch_input_container\">".CHtml::beginForm(array('instrument/search'), 'get', array('style'=> 'inline')) .
				CHtml::textField('q', '', array('placeholder'=> 'search...','style'=>'width:140px;')) .
				CHtml::submitButton('Go!',array('style'=>'width:30px;')) .
				CHtml::endForm('')."</div>";
    }
	
	/* function getSearch_Instrument(){
    //$user = $this->loadUser(Yii::app()->user->id);
	$a = "this is test";
	return $a ;
   } */
	/* protected function renderContent()
	{
		$tags = Tags::model()->findTagWeights($this->maxTags);

		foreach($tags as $tag=>$weight)
		{
			$link=CHtml::link(CHtml::encode($tag), array('post/index','tag'=>$tag));
			echo CHtml::tag('span', array(
				'class'=>'tag',
				'style'=>"font-size:{$weight}pt",
			), $link)."\n";
		}
	} */
}