<?php $this->beginContent('/layouts/main'); ?>
	<div class="wrapper_inner nobg">
    	<div class="top_bar">
        	<div class="inside">
            	<div class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/logo.png" alt="" /></a></div>
                <div class="topsearch_input_container">
                	<input type="text" value="Fender Custom Shop" />
					<input type="submit" value="GO" />
                </div>
                <div class="forum"><a href="#">Forum</a></div>
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
                        <ul>
                        	<li>
                            	<div class="similar_instruments_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-1.jpg" width="77" height="58" /></div>
                            	<div class="similar_instruments_description">
                               	  	<h4>2009 PRS Private Stock Signature Limited #3220</h4>
                                    <p>Collection: <a href="javascript:;">user1</a></p>
                                </div>
                            </li>
                            <li>
                            	<div class="similar_instruments_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-2.jpg" /></div>
                            	<div class="similar_instruments_description">
                               	  	<h4>2010 PRS Private Stock Hollow Body II </h4>
                                    <p>Collection: <a href="javascript:;">user2</a></p>
                                </div>
                            </li>
                            
                            <li>
                            	<div class="similar_instruments_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-3.jpg" /></div>
                            	<div class="similar_instruments_description">
                               	  	<h4>2008 PRS Private Stock Custom 24 LTD </h4>
                                    <p>Collection: <a href="javascript:;">user3</a></p>
                                </div>
                            </li>
                            
                            <li>
                            	<div class="similar_instruments_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-4.jpg" /></div>
                            	<div class="similar_instruments_description">
                               	  	<h4>2004 PRS Private Stock JA-15  </h4>
                                    <p>Collection: <a href="javascript:;">user4</a></p>
                                </div>
                            </li>
                            <li>
                            	<div class="similar_instruments_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-5.jpg" /></div>
                            	<div class="similar_instruments_description">
                               	  	<h4>2007 PRS Private Stock McCarty</h4>
                                    <p>Collection: <a href="javascript:;">user5</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
              </div>         
            </div>
        </div>
	</div>
    
	
<?php $this->endContent(); ?>