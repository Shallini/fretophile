<script type="text/javascript">
 $(document).ready(function() {
     $(".brand_listing").find("input[type=checkbox]").bind("change", function() {
            var val = $(this).val();
			var rel = $(this).attr("rel");
			var id = $(this).attr("id");
			var location = window.location.href;
			if($(this).is(':checked')) {
			   if(rel == "type") {
				   <?php if(isset($_GET["type"])) { ?>
				   var typeUpdate = "<?php echo str_replace(array('[',']'),'',$_GET["type"]); ?>"+val;
				   window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>" + "&"+rel+"=["+typeUpdate+",]";
				   <?php } else { ?>
				   window.location.href = location + "&"+rel+"=["+val+",]";
				   <?php } ?>
			   } else if(rel == "brand") {
				   <?php if(isset($_GET["brand"])) { ?>
				   var brandUpdate = "<?php echo str_replace(array('[',']'),'',$_GET["brand"]); ?>"+val;
				   window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>" + "&"+rel+"=["+brandUpdate+",]";
				   <?php } else { ?>
				   window.location.href = location + "&"+rel+"=["+val+",]";
				   <?php } ?>
			   } else if(rel == "year") {
				   <?php if(isset($_GET["year"])) { ?>
				   var yearUpdate = "<?php echo str_replace(array('[',']'),'',$_GET["year"]); ?>"+val;
				   window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>" + "&"+rel+"=["+yearUpdate+",]";
				   <?php } else { ?>
				   window.location.href = location + "&"+rel+"=["+val+",]";
				   <?php } ?>
			   } else if(rel == "sale") {
				   <?php if(isset($_GET["sale"])) { ?>
				   var saleUpdate = "<?php echo str_replace(array('[',']'),'',$_GET["sale"]); ?>"+val;
				   window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>" + "&"+rel+"=["+saleUpdate+",]";
				   <?php } else { ?>
				   window.location.href = location + "&"+rel+"=["+val+",]";
				   <?php } ?>
			   } else if(rel == "poster") {
				   <?php if(isset($_GET["poster"])) { ?>
				   var posterUpdate = "<?php echo str_replace(array('[',']'),'',$_GET["poster"]); ?>"+val;
				   window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>" + "&"+rel+"=["+posterUpdate+",]";
				   <?php } else { ?>
				   window.location.href = location + "&"+rel+"=["+val+",]";
				   <?php } ?>
			   }
			   
			   
			} else {
			   if(rel == "type") { 
				   <?php if(isset($_GET["type"])) { ?>
					   var updateType = "<?php echo str_replace(array('[',']'),'',$_GET["type"]); ?>";
					   updateType = updateType.replace(val+",","");
					    if(updateType != "") {
					       window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>" + "&"+rel+"=["+updateType+"]";
					    } else {
					       window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>";
						}
					   <?php } ?> 
			   } else if(rel == "brand") { 
				   <?php if(isset($_GET["brand"])) { ?>
					   var updateBrand = "<?php echo str_replace(array('[',']'),'',$_GET["brand"]); ?>";
					   updateBrand = updateBrand.replace(val+",","");
					    if(updateBrand != "") {
					       window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>" + "&"+rel+"=["+updateBrand+"]";
					    } else {
					       window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>";
						}
					   <?php } ?> 
			   }  else if(rel == "year") { 
				   <?php if(isset($_GET["year"])) { ?>
					   var updateYear = "<?php echo str_replace(array('[',']'),'',$_GET["year"]); ?>";
					   updateYear = updateYear.replace(val+",","");
					    if(updateYear != "") {
					       window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>" + "&"+rel+"=["+updateYear+"]";
					    } else {
					       window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>";
						}
					   <?php } ?> 
			   } else if(rel == "sale") { 
				   <?php if(isset($_GET["sale"])) { ?>
					   var updateSale = "<?php echo str_replace(array('[',']'),'',$_GET["sale"]); ?>";
					   updateSale = updateSale.replace(val+",","");
					    if(updateSale != "") {
					       window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>" + "&"+rel+"=["+updateSale+"]";
					    } else {
					       window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>";
						}
					   <?php } ?> 
			   } else if(rel == "poster") { 
				   <?php if(isset($_GET["poster"])) { ?>
					   var updatePoster = "<?php echo str_replace(array('[',']'),'',$_GET["poster"]); ?>";
					   updatePoster = updatePoster.replace(val+",","");
					    if(updatePoster != "") {
					       window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>" + "&"+rel+"=["+updatePoster+"]";
					    } else {
					       window.location.href = "<?php echo Yii::app()->request->baseUrl; ?>/index.php/instrument/search?q=<?php echo $_GET["q"]; ?>";
						}
					   <?php } ?> 
			   }
			}
     });	 
 });
 
 
 
var ajaxRequest = '';
function filterres(){
        return false;
		 //alert('here');
		 //alert('usertype: '+$('#usertype').is(':checked'));		 
		 
		var forsale ; 
		var usertype;
		var instype;
		 
		 if($('#for_sale').is(':checked')){		    
			forsale = 'forsale='+$('#for_sale').val();
		 }
		 else{
		    forsale = '';
		 }
		
		
		if($('#usertype').is(':checked')){		    
			 usertype = 'usertype='+$('#usertype').val();
		 }else{
		     usertype = '';
		 }
		 
		if($('#instype').is(':checked')){
			instype = 'tid='+$('#instype').val();
		} else{
			instype = '';
		}
		 
		 
		 //if (forsale!='' || usertype != '' || instype !=''){
		     ajaxRequest = forsale+'&'+usertype + '&'+instype;
		     alert(ajaxRequest);
		 
			  if(ajaxRequest!=''){
				window.location ='InstrumentFilter?'+ajaxRequest;
			  }
		 //}
		 
		}
</script>
<?php

Yii::import('zii.widgets.CPortlet');
//$url=CController::createUrl('InstrumentController/InstrumentFilter');
 
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
	  $poster = Instrument::model()->getUserTypeName();;
	  
	  
	  
	  $show = "<ul class=\"brand_listing\">
                    	<li>
                        	<h3>Listing</h3>
                            <ul>";
							    $scount = 1;
								foreach ($forsale as $forsale){
								if($forsale['forsale'] == 1){
								 $title = 'For Sale';
								}else{
								 $title = 'Not For Sale';
								}
								
								$sel = false;
								if(isset($_GET['sale'])) {
									$saleArr = explode(",", str_replace(array('[',']'),'',$_GET["sale"]));
									if(in_array($title,$saleArr)) {
									 $sel = true;
									}
								}
								
								
					/* 			$chkbox = CHtml::checkbox('for_sale', $sel, array('submit'=>'InstrumentFilter?forsale='.$forsale['forsale'],'value'=>$forsale['forsale'],'params'=> array('for_sale'=>$forsale['forsale']))); */
								$chkbox = CHtml::checkbox('sale'.$scount,$sel, array ('value'=>$title ,'rel'=>'sale'));
								$total = $forsale['total'];
								$show .= " 	<li>$chkbox $title ($total)</li>";
								$scount++;
								}        
                                
        $show .= " </ul>
                        </li>
                        <li>
                        	<h3>Poster</h3>
                            <ul>";
		foreach ($poster as $poster){
			//$posterUserId = $poster['userid'];	
			$posterUserTypeId = $poster['usertypeid'];
			$posterName = trim($poster['name']);
			$posterCount = Instrument::model()->getItemsUserCount($posterUserTypeId);
			if($posterName == "Player"){
				$posterNewName = 'Individual';
			}else{
			    $posterNewName = $poster['name'];
			}
			
			$sel = false;
			if(isset($_GET['poster'])) {
				$posterArr = explode(",", str_replace(array('[',']'),'',$_GET["poster"]));
				if(in_array($posterNewName,$posterArr)) {
						 $sel = true;
				}
			}
			
			/* $chkbox = CHtml::checkbox('usertype', $sel, array('submit'=>'InstrumentFilter?id='.$posterUserTypeId,'value'=>$posterUserTypeId,'params'=> array('usertypeid'=>$posterUserTypeId))); */
			$chkbox = CHtml::checkbox('usertype'.$posterUserTypeId,$sel, array ('value'=>$posterNewName ,'rel'=>'poster'));
			if($posterCount!=0){
			$show .= " 	<li>$chkbox $posterNewName ($posterCount)</li>";
			}
		}  
        
        $show.="</ul>
                        </li>
                        <li>
                        	<h3>Type</h3>
                            <ul>";
							foreach ($instrument as $parentinstrument){
                                $type_id = $parentinstrument['type_id'];							
								$patent_title = $parentinstrument['name'];	
								$parenttotal = Instrument::model()->getItemsTypeCount($type_id);			
                                $sel = false;
								if(isset($_GET['type'])) {
									$typeArr = explode(",", str_replace(array('[',']'),'',$_GET["type"]));
									if(in_array($patent_title,$typeArr)) {
									 $sel = true;
									}
								}
								
								/* $chkbox = CHtml::checkbox('instrument', $sel, array('submit'=>'InstrumentFilter?tid='.$type_id,'value'=>$type_id,'params'=> array('instrument'=>$type_id))); */
								$chkbox = CHtml::checkbox('type'.$type_id,$sel, array ('value'=>$patent_title,'rel'=>'type'));
								if($parenttotal!=0){
								$show .= " 	<li>$chkbox $patent_title ($parenttotal)</li>";
								}
							}  
                            	
         $show .= " </ul>
                        </li>";
                                      
         $show .= " <li>
                        	<h3>Brand</h3>
                            <ul>";
							foreach ($brands as $brand){
								$brandId = $brand['make_id'];
								$brandTitle = $brand['name'];								
								$brandTotal = Instrument::model()->getItemsBrandCount($brandId);
								
								$sel = false;
								if(isset($_GET['brand'])) {
									$brandArr = explode(",", str_replace(array('[',']'),'',$_GET["brand"]));
									if(in_array($brandTitle,$brandArr)) {
									 $sel = true;
									}
								}
								
								/* $chkbox = CHtml::checkbox('instrument', $sel, array('submit'=>'InstrumentFilter?mid='.$brandId,'value'=>$brandId,'params'=> array('instrument'=>$brandId))); */
								
								$chkbox = CHtml::checkbox('brand'.$brandId,$sel, array ('value'=>$brandTitle,'rel'=>'brand'));
								
									if($brandTotal!=0){
									 $show .= " 	<li>$chkbox $brandTitle ($brandTotal)</li>";
									}
								} 
       
        $show .="</ul>";
        $show .=" </li>";
		$show .=" <li><h3>Year</h3><ul>";
		$ycount = 1;
		foreach ($years as $year){
			
			$yearTitle = $year['year'];	
			$yearTotal = $year['total'];
			
			$sel = false;
			if(isset($_GET['year'])) {
				$yearArr = explode(",", str_replace(array('[',']'),'',$_GET["year"]));
				if(in_array($yearTitle,$yearArr)) {
						$sel = true;
				}
			}
			
			/* $chkbox = CHtml::checkbox('year', $sel, array('submit'=>'InstrumentFilter?year='.$yearTitle,'value'=>$yearTitle,
			  'params'=> array('year'=>$yearTitle)
			)); */
			
			$chkbox = CHtml::checkbox('year'.$ycount,$sel, array ('value'=>$yearTitle ,'rel'=>'year'));
			
			if($yearTotal!=0){
			 $show .= " 	<li>$chkbox $yearTitle ($yearTotal)</li>";
			}
			$ycount++;
		} 
		
		$show .=" </ul></li>";
        $show .=" </ul>";
	  
	  echo $show;
		
	}
}