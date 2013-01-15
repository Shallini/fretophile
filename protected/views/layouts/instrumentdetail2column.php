<?php $this->beginContent('/layouts/main'); ?>
	<div class="wrapper_inner nobg">
    	<div class="top_bar">
        	<div class="inside">            	
				<?php include('menu.php');?>
            </div>
        </div>
        
        <div class="middle_container">
            <div class="inside">
            	<div class="">
               	  <?php echo $content; ?>
                  <!--  <div class="clr"></div>
                    <div class="for_sale"><img src="images/for-sale.jpg" alt="" /></div>
                    <div class="forsalecollection">From the collection of <a href="javascript:;">jchix</a></div>
                    <div class="contact_owner"><a href="javascript:;">Contact Owner >></a></div>-->
              </div>
			  
                <div class="middle_right">
				<?php //$this->widget('Tags', array('maxTags'=>20,)); ?>
                	<div class="advertisement"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/advertisement.jpg" width="300" height="268" /></div>
                	<div class="similar_instruments">
                    	<h3>Similar Instruments</h3>
						<?php      
						//Getting id from url
						$itemId = Yii::app()->getRequest()->getParam('id');
						$findInfo = Instrument::model()->findbyPk($itemId);//fetch info of id						  
						$makeId = $findInfo->make_id;//get make id
						$year = $findInfo->year;//get year
						$model = $findInfo->model;//get model text
						
						//calling similar widget						
						//$this->widget('SimilarInstrument', array('limit'=>5,'make'=>$makeId,'item'=>$itemId ));
						$this->widget('SimilarInstrument', array('limit'=>5,'make'=>$makeId,'item'=>$itemId,'year'=>$year,'model'=>$model)); 
						
						?>
                        
                    </div>
              </div>         
            </div>
        </div>
	</div>
    
	
<?php $this->endContent(); ?>