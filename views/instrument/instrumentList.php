<?php
$this->pageTitle=Yii::app()->name . ' - Instrument List';
$this->breadcrumbs=array('Instrument List');
?>
<?php // $command = Yii::app()->db->createCommand();
	  // $instArray = $command->select('*')->from('{{items}}')->queryAll();
	  //print_r( CHtml::listData($instArray,'type_id','year'));	 
?>	  
	
<div class="tab_section">
                <div class="custom_shop_box">
                
                <div class="tab_button_forums">
                <ul>
                <li><a href="#" class="active_inst">Instruments</a></li>
	            <li><a href="#">Forums</a></li>
    	        </ul>
                </div>
                
                <div class="border_bottom"></div>
                
                <div class="tab_button_sale">
                <ul>
                <li><a href="#" class="active_insts">All</a></li>
	            <li><a href="#">For Sale</a></li>
   	            <li><a href="#">Not For Sale</a></li>
    	        </ul>
                </div>
                	                	
                    <div class="search_listing">
                    	<!--Display Row-->
                        	<div class="search_result_display">
                            	<div class="search_result_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/listing_img1.jpg" width="107" height="80" /></div>
                              	<div class="search_result_description">
                                    <h2>2006 Fender Custom Shop Strat</h2>
                                    <p>This is a beautiful custom shop stratocaster with an 
                                    ebony transparent finish and parchment pickgard.</p>
                                    <div class="clr"></div>
                                    <div class="collection_tag">
                                        Collection:  <a href="javascript:;">User1</a><br />
                                        Tags:  <a href="javascript:;">Fender</a> &#8226; <a href="javascript:;">Strat</a> &#8226; <a href="javascript:;">Custom Shop</a>
                                    </div>
                                </div>
                                
                              <div class="search_for_sale">
                                <div class="for_sale"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/for-sale.jpg" width="76" height="22" alt="" /></div>
                                <div class="by_owner">By Owner</div>
                                <div class="clr" style="height:10px;"></div>
                                <a href="#">Contact Seller</a>
                                
                              </div>
                            </div>                        
                        <!--Display Row-->                        
                        <!--Display Row-->
						<?php foreach ($inst as $ins): ?>

						<div class="search_result_display">
                            	<div class="search_result_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/listing_img2.jpg" width="107" height="80" /></div>
                              	<div class="search_result_description">
								<?php //echo "<pre>";print_r($ins->getAttributes());echo"</pre>"; ?>
														
                                    <h2><?php echo $ins['year']. ' '.$ins['model']; ?></h2>
                                    <p><?php echo CHtml::decode($ins['description']); ?></p>
                                    <div class="clr"></div>
                                    <div class="collection_tag">
                                        Collection:  <a href="javascript:;">
										<?php  $oDocDocs = new Instrument;
										   $oDocDocs->user_id = $ins['user_id'];
										   $aRecords = $oDocDocs->user;
										   //print_r($aRecords);
										   echo ucfirst($aRecords->username);
                                        ?>
								     </a><br />
                                        Tags:  <?php  $oDocDocs1 = new Instrument;
										              $oDocDocs1->item_id = 2;
										              $aRecords1 = $oDocDocs1->posts;
										              //print_r($aRecords1);
										   //echo ucfirst($aRecords->username);
                                        ?><a href="javascript:;">Fender</a> &#8226; <a href="javascript:;">Strat</a> &#8226; <a href="javascript:;">Custom Shop</a>
                                    </div>
                                </div>
                            </div>   
						<?php endforeach; ?>
                        	                      
                        <!--Display Row-->                       
                     
                        <!--Display Row-->
                        	<div class="search_result_display">
                            	<div class="search_result_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/listing_img5.jpg" width="107" height="80" /></div>
                              	<div class="search_result_description">
                                    <h2>2006 Fender Custom Shop Strat</h2>
                                    <p>This is a beautiful custom shop stratocaster with an 
                                    ebony transparent finish and parchment pickgard.</p>
                                    <div class="clr"></div>
                                    <div class="collection_tag">
                                        Collection:  <a href="javascript:;">User1</a><br />
                                        Tags:  <a href="javascript:;">Fender</a> &#8226; <a href="javascript:;">Strat</a> &#8226; <a href="javascript:;">Custom Shop</a>
                                    </div>
                                </div>
                                <div class="search_for_sale">
                                <div class="for_sale"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/for-sale.jpg" width="76" height="22" alt="" /></div>
                                <div class="by_owner">By Owner</div>
                                <div class="clr" style="height:10px;"></div>
                                <a href="#">Contact Seller</a>
                                
                              </div>
                            </div>                        
                        <!--Display Row-->                       
                        <!--Display Row-->
                        	<div class="search_result_display">
                            	<div class="search_result_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/listing_img6.jpg" width="107" height="80" /></div>
                              	<div class="search_result_description">
                                    <h2>2006 Fender Custom Shop Strat</h2>
                                    <p>This is a beautiful custom shop stratocaster with an 
                                    ebony transparent finish and parchment pickgard.</p>
                                    <div class="clr"></div>
                                    <div class="collection_tag">
                                        Collection:  <a href="javascript:;">User1</a><br />
                                        Tags:  <a href="javascript:;">Fender</a> &#8226; <a href="javascript:;">Strat</a> &#8226; <a href="javascript:;">Custom Shop</a>
                                    </div>
                                </div>
                            </div>                        
                        <!--Display Row-->                        
                        <!--Display Row-->
                        	<div class="search_result_display">
                            	<div class="search_result_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/listing_img7.jpg" width="107" height="80" /></div>
                              	<div class="search_result_description">
                                    <h2>2006 Fender Custom Shop Strat</h2>
                                    <p>This is a beautiful custom shop stratocaster with an 
                                    ebony transparent finish and parchment pickgard.</p>
                                    <div class="clr"></div>
                                    <div class="collection_tag">
                                        Collection:  <a href="javascript:;">User1</a><br />
                                        Tags:  <a href="javascript:;">Fender</a> &#8226; <a href="javascript:;">Strat</a> &#8226; <a href="javascript:;">Custom Shop</a>
                                    </div>
                                </div>
                            </div>                        
                        <!--Display Row-->                        
                    </div>
                	<div class="pagination">
                        <ul>
                            <li class="previous-off">&laquo; Previous</li>
                            <li class="active_page">1</li>
                            <li><a href="javascript:;">2</a></li>
                            <li><a href="javascript:;">3</a></li>
                            <li><a href="javascript:;">4</a></li>
                            <li><a href="javascript:;">5</a></li>
                            <li><a href="javascript:;">6</a></li>
                            <li><a href="javascript:;">7</a></li>
                            <li><a href="javascript:;">8</a></li>
                            <li><a href="javascript:;">9</a></li>
                            <li><a href="javascript:;">10</a></li>
                            <li class="next"><a href="javascript:;">Next &raquo;</a></li>
                        </ul>
                    </div>
