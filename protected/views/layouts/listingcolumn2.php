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
               <!-- <div class="user_panel">
				<?php //include('menu.php');?>
                </div>
            	<div class="clr"></div>-->
            </div>
        </div>
        
        <div class="middle_container">
            <div class="inside">
            	<?php echo $content; ?>
                </div>
                </div>
                <div class="column_three">
                	<div class="advertisement"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/advertisement2.jpg" width="280" height="245" /></div>
                    <div class="fender_custom_strat">
                    	<h3>Fender Custom Strat on eBay</h3>
                        <ul>
                            <li>
                                <div class="fender_custom_strat_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-1.jpg" width="77" height="58" /></div>
                                <div class="fender_custom_strat_description">
                                    <h4>PRS Private Stock McCarty</h4>
                                    <span class="fender_price">$7995.99</span>
                                    <p>4 Days 18 Hours and 20 Minutes Left</p>
                                </div>
                            </li>
                            <li>
                            	<div class="fender_custom_strat_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-2.jpg" /></div>
                            	<div class="fender_custom_strat_description">
                               	  	<h4>2012 PRS Custom 24 in Charcoal Burst with Trem </h4>
                                    <span class="fender_price">$2995.99</span>
                                    <p>5 Days 3 Hours and 30 Minutes Left</p>
                                </div>
                            </li>
                            <li>
                            	<div class="fender_custom_strat_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-3.jpg" /></div>
                            	<div class="fender_custom_strat_description">
                               	  	<h4>2012 PRS Custom 24 in Charcoal Burst with Trem </h4>
                                    <span class="fender_price">$3795.99</span>
                                    <p>5 Days 3 Hours and 30 Minutes Left</p>
                                </div>
                            </li>
                            <li>
                            	<div class="fender_custom_strat_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-4.jpg" /></div>
                            	<div class="fender_custom_strat_description">
                               	  	<h4>2012 PRS Custom 24 in Charcoal Burst with Trem </h4>
                                    <span class="fender_price">$2295.99</span>
                                    <p>5 Days 3 Hours and 30 Minutes Left</p>
                                </div>
                            </li>
                            <li>
                            	<div class="fender_custom_strat_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-5.jpg" /></div>
                            	<div class="fender_custom_strat_description">
                               	  	<h4>2012 PRS Custom 24 in Charcoal Burst with Trem </h4>
                                    <span class="fender_price">$1895.99</span>
                                    <p>5 Days 3 Hours and 30 Minutes Left</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                
                </div>
            </div>
        
	
<?php $this->endContent(); ?>