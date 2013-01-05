<?php

Yii::import('zii.widgets.CPortlet');

class InstrumentFilter extends CPortlet
{    
	
	protected function renderContent()
	{	
      $sel = false;
	  $forsale = Instrument::model()->forSaleCount();
	  $instrument = Instrument::model()->getParentInstruments();
	  $childInstrument = Instrument::model()->getChildInstruments();
	  $brands = Instrument::model()->getBrands();
	  $years = Instrument::model()->getYearCount();

		//public static string activeCheckBox(CModel $model, string $attribute, array $htmlOptions=array ( ));
		//public static string checkBox(string $name, boolean $checked=false, array $htmlOptions=array ( ));
		//public static string label(string $label, string $for, array $htmlOptions=array ( ));
		/* echo CHtml::label('Hello', 'my_checkbox');
		echo CHtml::checkbox('my_checkbox', false, array(
		  'submit'=>'ajaxRequest',
		  'value'=>'pp',
		  'params'=> array('my_checkbox'=>1)
		));  */
	  
	  $show = "<ul class=\"brand_listing\">
                    	<li>
                        	<h3>Listing</h3>
                            <ul>";
								foreach ($forsale as $forsale){
								
								if(isset($_GET['forsale']) && ($_GET['forsale'] == $forsale['forsale'])){
								 $sel = true;
								}else{
								$sel = false;
								}
								
								if($forsale['forsale'] == 1){
								 $title = 'For Sale';
								}else{
								 $title = 'Not For Sale';
								}
								
								$chkbox = CHtml::checkbox('for_sale', $sel, array('submit'=>'InstrumentFilter?forsale='.$forsale['forsale'],'value'=>$forsale['forsale'],
		  'params'=> array('for_sale'=>$forsale['forsale'])
		));
								$total = $forsale['total'];
								$show .= " 	<li>$chkbox $title ($total)</li>";
								}        
                               
        $show .= " </ul>
                        </li>
                        <li>
                        	<h3>Poster</h3>
                            <ul>
                            	<li><input type=\"checkbox\" /> Dealer (6)</li>
								<li><input type=\"checkbox\" /> Individual (13)</li>
                            </ul>
                        </li>
                        <li>
                        	<h3>Instrument</h3>
                            <ul>";
							foreach ($instrument as $parentinstrument){
                                $type_id = $parentinstrument['type_id'];							
								$patent_title = $parentinstrument['name'];	
								$parenttotal = Instrument::model()->getItemsTypeCount($type_id);			

								if(isset($_GET['tid']) && ($_GET['tid'] == $type_id)){
								 $sel = true;
								}else{
								$sel = false;
								}
								
								$chkbox = CHtml::checkbox('instrument', $sel, array('submit'=>'InstrumentFilter?tid='.$type_id,'value'=>$type_id,'params'=> array('instrument'=>$type_id)));
								if($parenttotal!=0){
								$show .= " 	<li>$chkbox $patent_title ($parenttotal)</li>";
								}
							}  
                            	
         $show .= " </ul>
                        </li>
                        <li>
                        	<h3>Type</h3>
                            <ul>";
							$sel = false;
							foreach ($childInstrument as $cinstrument){
								$type_id = $cinstrument['type_id'];							
								$childTitle = $cinstrument['name'];								
								//$childTotal = $cinstrument['totalcount'];
								$childTotal = Instrument::model()->getItemsTypeCount($type_id);
								
								if(isset($_GET['tid']) && ($_GET['tid'] == $type_id)){
								 $sel = true;
								}else{
								$sel = false;
								}
								
								$chkbox = CHtml::checkbox('instrument', $sel, array('submit'=>'InstrumentFilter?tid='.$type_id,'value'=>$type_id,'params'=> array('instrument'=>$type_id,)));
								//$chkbox = CHtml::activeCheckBox('Instrument', 'instrument', array('submit'=>'InstrumentFilter?tid='.$type_id,'value'=>$type_id,'params'=> array('instrument'=>$type_id,)));
								if($childTotal!=0){
								$show .= " 	<li>$chkbox $childTitle ($childTotal)</li>";
								}
							}  
                      
        $show .="</ul>
                        </li>                        
                        <li>
                        	<h3>Brand</h3>
                            <ul>";
							foreach ($brands as $brand){
								$brandId = $brand['make_id'];
								$brandTitle = $brand['name'];								
								$brandTotal = Instrument::model()->getItemsBrandCount($brandId);
								
								if(isset($_GET['mid']) && ($_GET['mid'] == $brandId)){
								 $sel = true;
								}else{
								$sel = false;
								}
								
								$chkbox = CHtml::checkbox('instrument', $sel, array('submit'=>'InstrumentFilter?mid='.$brandId,'value'=>$brandId,'params'=> array('instrument'=>$brandId)));
								
								if($brandTotal!=0){
								 $show .= " 	<li>$chkbox $brandTitle ($brandTotal)</li>";
								}
								} 
       
        $show .="</ul>";
        $show .=" </li>";
		$show .=" <li><h3>Year</h3><ul>";
		foreach ($years as $year){
			
			$yearTitle = $year['year'];	
			$yearTotal = $year['total'];
			
			$chkbox = CHtml::checkbox('year', $sel, array('submit'=>'InstrumentFilter?year='.$yearTitle,'value'=>$yearTitle,
			  'params'=> array('year'=>$yearTitle)
			));
			
			$show .= " 	<li>$chkbox $yearTitle ($yearTotal)</li>";
		} 
		
		$show .=" </ul></li>";
        $show .=" </ul>";
	  
	  echo $show;
		
	}
}