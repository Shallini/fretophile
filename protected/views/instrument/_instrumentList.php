<div class="search_listing">	

<?php if (!empty($results)): ?>
      <?php foreach($results as $result): ?>
	  
	  <?php //for($i = $currentPage * $pages->pageSize - $pages->pageSize; $i<$end;$i++):		
		$model = $result['model']; 
		$year = $result['year']; 		  
		//$descption = $query->highlightMatches(CHtml::encode($result->description)); 
		$userId = CHtml::encode($result['user_id']);
		$itemId = CHtml::encode($result['item_id']);
		$forsale = CHtml::encode($result['forsale']);  
	?>
					
          <div class="search_result_display">
				<div class="search_result_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/listing_img2.jpg" width="107" height="80" /></div>
				<div class="search_result_description">											
					<h2><a href="<?php echo Yii::app()->request->baseUrl.'/index.php/instrument/detail?id='.$itemId ; ?>"><?php echo $year. ' '.$model; ?></a></h2>
					<p><?php $desc = $result['description']; 
					$length = strlen($desc);
					if($length > 100){
					   $rest = substr($desc,0, 100) . " ...";
					}else{
					   $rest = $desc;
					}
					echo $rest;
				     ?></p>
					<div class="clr"></div>
					<div class="collection_tag">
						Collection:  <a href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/profile?id='.$userId ; ?>">
						<?php  $oDocDocs = new Instrument;
						   $oDocDocs->user_id = $userId;
						   $aRecords = $oDocDocs->user;
						   //print_r($aRecords);
						   echo ucfirst($aRecords->username);
						?>
					 </a><br />
						Tags:  <?php  
						          $instrumnt = new Instrument;
								  $instrumnt->item_id = $itemId;
								  $records = $instrumnt->items;													  
								  $tagId = $records['tagid'];
					   
								  $tag = Yii::app()->db->createCommand()
												->select('tag_id,tag')
												->from('tbl_tag_lookup tl')
												->join('tbl_tags ts', 'tl.tagid=ts.tag_id')
												->where('tag_id=:tagid', array(':tagid'=>$tagId))
												->queryRow();									
								 $tags = $tag['tag'];
								 
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
				<?php if ($forsale == 1){ ?>
				<div class="search_for_sale">
				<div class="for_sale"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/for-sale.jpg" width="76" height="22" alt="" /></div>
				<div class="by_owner">By <?php echo ucfirst($aRecords->username); ?></div>
				<div class="clr" style="height:10px;"></div>
				<a href="#" class="con_seller_link">Contact Seller</a>
				
			    </div>
				<?php }?>
			</div>   
		
	
                <?php endforeach; ?>
				
				<div class="pagination">
				
				<?php $this->widget('CLinkPager', array('pages' => $pages,)) ?>
				</div>
 
            <?php else: ?>
                <p class="error">No results matched your search terms.</p>
            <?php endif; ?>
	   </div> 