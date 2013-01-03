<?php
$this->pageTitle=Yii::app()->name . ' - Instrument List';
$this->breadcrumbs=array('Instrument List');
?>
<?php // $command = Yii::app()->db->createCommand();
	  // $instArray = $command->select('*')->from('{{items}}')->queryAll();
	  //print_r( CHtml::listData($instArray,'type_id','year'));	 
?>	  

            	<div class="column_first">
                	<ul class="brand_listing">
                    	<li>
                        	<h3>Listing</h3>
                            <ul>
                            	<li><input type="checkbox" /> For Sale (15)</li>
                                <li><input type="checkbox" /> Not for Sale (4)</li>
                            </ul>
                        </li>
                        <li>
                        	<h3>Poster</h3>
                            <ul>
                            	<li><input type="checkbox" /> Dealer (6)</li>
								<li><input type="checkbox" /> Individual (13)</li>
                            </ul>
                        </li>
                        <li>
                        	<h3>Instrument</h3>
                            <ul>
                            	<li><input type="checkbox" /> Guitar (17)</li>
								<li><input type="checkbox" /> Bass (2)</li>
                            </ul>
                        </li>
                        <li>
                        	<h3>Type</h3>
                            <ul>
                            	<li><input type="checkbox" /> Acoustic (1)</li>
								<li><input type="checkbox" /> Electric (18)</li>
                            </ul>
                        </li>                        
                        <li>
                        	<h3>Brand</h3>
                            <ul>
                            	<li><input type="checkbox" /> Fender (18)</li>
								<li><input type="checkbox" /> Suhr (1)</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="column_second">
                	                	
                    <div class="search_listing">
					
					    <!--Display Row-->
						<?php foreach ($inst as $ins): ?>

						<div class="search_result_display">
                            	<div class="search_result_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/listing_img2.jpg" width="107" height="80" /></div>
                              	<div class="search_result_description">											
                                    <h2><a href="<?php echo Yii::app()->request->baseUrl.'/index.php/instrument/detail?id='.$ins['item_id'] ; ?>"><?php echo $ins['year']. ' '.$ins['model']; ?></a></h2>
                                    <p><?php $desc = CHtml::decode($ins['description']);
									$length = strlen($desc);
									if($length > 100){
									   $rest = substr($desc,0, 100) . " ...";
									}else{
									   $rest = $desc;
									}
									echo $rest;
									//echo '<br>';
									//echo CHtml::decode($ins['description']); ?></p>
                                    <div class="clr"></div>
                                    <div class="collection_tag">
                                        Collection:  <a href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/profile?id='.$ins['user_id'] ; ?>">
										<?php  $oDocDocs = new Instrument;
										   $oDocDocs->user_id = $ins['user_id'];
										   $aRecords = $oDocDocs->user;
										   //print_r($aRecords);
										   echo ucfirst($aRecords->username);
                                        ?>
								     </a><br />
                                        Tags:  <?php  $instrumnt = new Instrument;
										              $instrumnt->item_id = $ins['item_id'];
										              $records = $instrumnt->items;													  
													  $tagId = $records['tagid'];
										   //echo ucfirst($aRecords->username);
										   $user = Yii::app()->db->createCommand()
													->select('tag_id,tag')
													->from('tbl_tag_lookup tl')
													->join('tbl_tags ts', 'tl.tagid=ts.tag_id')
													->where('tag_id=:tagid', array(':tagid'=>$tagId))
													->queryRow();
													//print_r($user);
													$tags = $user['tag'];
													if(!empty($tags)){
														$explodetags = explode(",", $tags);
														if(count($explodetags) > 1){
														foreach($explodetags as $tag){
														   echo "<a href=\"javascript:;\">".$tag . "</a> &#8226; " ;
														}
														}else{
														  echo "<a href=\"javascript:;\">".$tags . "</a>" ;
														}
													}else{
													  echo "No Tags";
													}
                                        ?>
                                    </div>
                                </div>
								<?php if ($ins['forsale'] == 1){ ?>
								<div class="search_for_sale">
                                <div class="for_sale"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/for-sale.jpg" width="76" height="22" alt="" /></div>
                                <div class="by_owner">By <?php echo ucfirst($aRecords->username); ?></div>
                                <div class="clr" style="height:10px;"></div>
                                <a href="#" class="con_seller_link">Contact Seller</a>
                                
                              </div>
								<?php }?>
                            </div>   
						<?php endforeach; ?>
                        	                      
                        <!--Display Row-->   
						
                    	                        
                                              
                                            
                                              
                                              
                    </div>
                	<div class="pagination">
                        <ul>
                            <li class="previous-off">&laquo; Previous</li>
                            <li class="active">1</li>
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
                </div>
               
    
<script type="text/javascript">
	$(".search_result_display:even").addClass("even");
	$(".fender_custom_strat li:even").addClass("even");
</script>
