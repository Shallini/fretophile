<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<style>
	/* This rule is read by Galleria to define the gallery height: */
	#galleria{height:500px}

</style>
<?php
$this->pageTitle=Yii::app()->name . ' - Instrument Detail';
$this->breadcrumbs=array('Instrument Detail');
/* echo '<pre>';
print_r($model);
echo '</pre>'; */
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/css/galleria.classic.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/assets/js/galleria-1.2.8.js');
//Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/assets/js/galleria.classic.js');
//Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/assets/js/galleria.classic.min.js');
?> 
<div class="middle_left">
	<h1><?php echo $model['year']. ' '.$model['model']; ?></h1>
	<div class="clr"></div>
	<?php if ($model['forsale'] == 1){ ?>
	<div class="for_sale"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/for-sale.jpg"></div>
	<?php } ?>
	<div class="forsalecollection">From the collection of <a href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/profile?id='.$model['user_id'] ; ?>">
	<?php  $oDocDocs = new Instrument;
		   $oDocDocs->user_id = $model['user_id'];
		   $aRecords = $oDocDocs->user;
		   echo $aRecords->username;
		?></a></div>
	<div class="contact_owner"><a href="javascript:;">Contact Owner &gt;&gt;</a></div>
	<div class="clr"></div>
	<div class="carousel_gallery_section">
		<div id="galleria"><div class="galleria-container notouch" style="width: 642px; height: 500px;"><div class="galleria-stage"><div class="galleria-images" style="position: relative; top: 0px; left: 0px; width: 100%; height: 100%;"><div class="galleria-image" style="overflow: hidden; position: absolute; top: 0px; left: 0px; transition: none 0s ease 0s ; opacity: 1; z-index: 1; width: 642px; height: 440px;"><div class="galleria-layer" style="position: absolute; top: 6px; left: 0px; right: 0px; bottom: 0px; z-index: 2; display: none; width: 642px; height: 428px;"></div><img width="642" height="428" style="display: block; opacity: 1; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 642px; height: 428px; position: absolute; top: 6px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-large-img5.jpg"></div><div class="galleria-image" style="overflow: hidden; position: absolute; top: 0px; left: 0px; opacity: 0; width: 642px; height: 440px; transition: none 0s ease 0s ; z-index: 0;"><div class="galleria-layer" style="position: absolute; top: 6px; left: 0px; right: 0px; bottom: 0px; z-index: 2; display: none; width: 642px; height: 428px;"></div><img width="642" height="428" style="display: block; opacity: 1; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 642px; height: 428px; position: absolute; top: 6px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-large-img1.jpg"></div></div><div class="galleria-loader" style="display: none; opacity: 0.4;"></div><div class="galleria-counter" style="opacity: 0; display: block; transition: left 200ms cubic-bezier(0.25, 0.1, 0.25, 1) 0s, right 200ms cubic-bezier(0.25, 0.1, 0.25, 1) 0s, opacity 200ms cubic-bezier(0.25, 0.1, 0.25, 1) 0s;"><span class="galleria-current">5</span> / <span class="galleria-total">12</span></div><div class="galleria-image-nav"><div class="galleria-image-nav-right" style="right: -50px; transition: left 200ms cubic-bezier(0.25, 0.1, 0.25, 1) 0s, right 200ms cubic-bezier(0.25, 0.1, 0.25, 1) 0s;"></div><div class="galleria-image-nav-left" style="left: -50px; transition: left 200ms cubic-bezier(0.25, 0.1, 0.25, 1) 0s;"></div></div></div><div class="galleria-thumbnails-container galleria-carousel"><div class="galleria-thumb-nav-left"></div><div class="galleria-thumbnails-list" style="overflow: hidden; position: relative;"><div class="galleria-thumbnails" style="overflow: hidden; position: relative; width: 1116px; height: 56px; left: -279px; transition: none 0s ease 0s ;"><div class="galleria-image" style="overflow: hidden; position: relative; visibility: visible; width: 81px; height: 54px;"><img width="81" height="54" style="display: block; opacity: 0.6; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 81px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img1.jpg"></div><div class="galleria-image" style="overflow: hidden; position: relative; visibility: visible; width: 81px; height: 54px;"><img width="81" height="54" style="display: block; opacity: 0.6; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 81px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img2.jpg"></div><div class="galleria-image" style="overflow: hidden; position: relative; visibility: visible; width: 81px; height: 54px;"><img width="81" height="54" style="display: block; opacity: 0.6; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 81px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img3.jpg"></div><div class="galleria-image" style="overflow: hidden; position: relative; visibility: visible; width: 80px; height: 54px;"><img width="80" height="54" style="display: block; opacity: 0.6; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 80px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img4.jpg"></div><div class="galleria-image active" style="overflow: hidden; position: relative; visibility: visible; width: 81px; height: 54px;"><img width="81" height="54" style="display: block; opacity: 1; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 81px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img5.jpg"></div><div class="galleria-image" style="overflow: hidden; position: relative; visibility: visible; width: 81px; height: 54px;"><img width="81" height="54" style="display: block; opacity: 0.6; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 81px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img6.jpg"></div><div class="galleria-image" style="overflow: hidden; position: relative; visibility: visible; width: 81px; height: 54px;"><img width="81" height="54" style="display: block; opacity: 0.6; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 81px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img1.jpg"></div><div class="galleria-image" style="overflow: hidden; position: relative; visibility: visible; width: 81px; height: 54px;"><img width="81" height="54" style="display: block; opacity: 0.6; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 81px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img2.jpg"></div><div class="galleria-image" style="overflow: hidden; position: relative; visibility: visible; width: 81px; height: 54px;"><img width="81" height="54" style="display: block; opacity: 0.6; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 81px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img3.jpg"></div><div class="galleria-image" style="overflow: hidden; position: relative; visibility: visible; width: 80px; height: 54px;"><img width="80" height="54" style="display: block; opacity: 0.6; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 80px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img4.jpg"></div><div class="galleria-image" style="overflow: hidden; position: relative; visibility: visible; width: 81px; height: 54px;"><img width="81" height="54" style="display: block; opacity: 0.6; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 81px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img5.jpg"></div><div class="galleria-image" style="overflow: hidden; position: relative; visibility: visible; width: 81px; height: 54px;"><img width="81" height="54" style="display: block; opacity: 0.6; min-width: 0px; min-height: 0px; max-width: none; max-height: none; width: 81px; height: 54px; position: absolute; top: 0px; left: 0px;" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/gallery-img6.jpg"></div></div></div><div class="galleria-thumb-nav-right"></div></div><div class="galleria-info" style="display: none;"><div class="galleria-info-text"><div class="galleria-info-title" style="display: none;"></div><div class="galleria-info-description" style="display: none;"></div></div><div class="galleria-info-link"></div><div class="galleria-info-close"></div></div><div class="galleria-tooltip" style="opacity: 0;"></div></div></div>
	</div>
	<div class="clr"></div>
	<div class="product_content">
		<div class="product_description">
			<h2>Description</h2>
			<p><?php 
			$desc = CHtml::decode($model['description']);
			if($desc == ""){
			 echo "No description for this instrument.";
			}else{
			 echo $desc;
			}
			
			?></p>
		</div>
		<div class="tags">
                            <h2>Features</h2>
                            
							<?php  $instrumnt = new Instrument;
										              $instrumnt->item_id = $model['item_id'];
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
														$count = count($explodetags);
														$liCounter = 0;
														if($count > 1){
														  
															foreach($explodetags as $tag){
															   
															   
															   if($liCounter == 0)
															   {
																echo "<ul class=\"tags_listing\">";
															   }
															   echo "<li><a href=\"javascript:;\">".$tag . "</a></li>" ;
															    $liCounter ++;
															   if($liCounter == 3)
															   {
																echo "</ul>";
																$liCounter =0;
															   }
															  
															   //echo "<a href=\"javascript:;\">".$tag . "</a> &#8226; " ;
															}
														}else{
														   echo "<ul class=\"tags_listing\">";
														   echo "<li><a href=\"javascript:;\">".$tags . "</a></li>" ;
														   echo "</ul>";
														}
													}else{
													  echo "No Tags";
													}
                                        ?>
                            	<!--
								<ul class="tags_listing">
								<li><a href="javascript:;">Hybrid Hardware</a></li>                                
                                <li><a href="javascript:;">Phase II Tuners</a></li>
                                <li><a href="javascript:;">East Indian Rosewood Neck</a></li>
                                </ul>
                                 <ul class="tags_listing">
                                <li><a href="javascript:;">Ebony Fingerboard</a></li>
                                <li><a href="javascript:;">Iveroid Tuners</a></li>
                                <li><a href="javascript:;">Nightshade Smokeburst Finish</a></li>
                                </ul>
                                 <ul class="tags_listing">
                                <li><a href="javascript:;">57/08 Pickups</a></li>
                                <li><a href="javascript:;">Mother of Pearl Inlays</a></li>
                                <li><a href="javascript:;">Adjustable Stoptail bridge</a></li>
                            </ul>-->
                        </div>
	</div>
	</div>	
<script>
	// Load the classic theme
	Galleria.loadTheme("<?php echo "http://ganga.impingesolutions.com".Yii::app()->baseUrl.'/assets/js/galleria.classic.min.js' ; ?>");
	// Initialize Galleria
	Galleria.run('#galleria');
</script>
