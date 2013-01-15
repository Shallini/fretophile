<?php

Yii::import('zii.widgets.CPortlet');

class SimilarInstrument extends CPortlet
{
    public $limit;
    public $make;
    public $item;
	
	protected function renderContent()
	{
		$instruments = Instrument::model()->findSimilarInstruments($this->limit,$this->make,$this->item);
		$count_item =  count($instruments);
		
		$imageUrl = Yii::app()->request->baseUrl .'/assets/images/img-1.jpg';
		
		if($count_item>0){
		 echo '<ul>';
		 foreach($instruments as $ins){
		   
		   
		   $title = $ins['year'] .' '.$ins['model'] ;
		   $url = Yii::app()->request->baseUrl.'/index.php/instrument/detail?id='.$ins['item_id'];
		   $usrUrl =  Yii::app()->request->baseUrl.'/index.php/site/profile?id='.$ins['user_id'] ;
		   
		   //using relation for getting user information
		   $oDocDocs = new Instrument;
		   $oDocDocs->user_id = $ins['user_id'];
		   $aRecords = $oDocDocs->user;
		   $name = ucfirst($aRecords->username);
		   
			$list ="<li>
				<div class=\"similar_instruments_thumb\"><img src=\"$imageUrl\" width=\"77\" height=\"58\" /></div>
				<div class=\"similar_instruments_description\">";				 
			$list .="<h4><a href=\"$url\">$title</a></h4>
					<p>Collection: <a href=\"$usrUrl\">";		
            $list .="$name</a></p>
					</div>
				</li>";
			echo $list;
		 
		 
		 }
		
		 echo '</ul>';
	}else{
	  echo 'No similar instruments found';
	}
		/* foreach($tags as $tag=>$weight)
		{
			$link=CHtml::link(CHtml::encode($tag), array('post/index','tag'=>$tag));
			echo CHtml::tag('span', array(
				'class'=>'tag',
				'style'=>"font-size:{$weight}pt",
			), $link)."\n";
		} */
	}
}