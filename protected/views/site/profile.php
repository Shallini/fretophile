<?php
$this->pageTitle=Yii::app()->name . ' - Profile';
$this->breadcrumbs=array('Profile',);
//print_r($model);

$base= Yii::app()->getBaseUrl(true);
$orgimg = $model->avatar_location;
if(!empty($orgimg)){
   $img = str_replace('originals', 'big', $orgimg);
}else{
   $img = "assets/images/no-image.png";
}						


?>
<div id="collection_page">
             
	<div class="user_info">
		<div class="user_img"><img src="<?php echo $base.'/'.$img; ?>"></div>

		<div class="user_info_text">
		<h3><?php echo $model->firstname .' '.$model->lastname; ?></h3>
		<p>Member Name:<?php echo ucfirst($model->username); ?></p>
		<p>Member Since: <?php echo $mysqldate = date( 'm/d/Y', strtotime($model->user_created) );?>	</p>
		<?php $city = ucfirst($model->city) ;
			  $state = ucfirst($model->state);
		      $country  = ucfirst($model->country); 
			  $location = '';
			  if(!empty($city)):
			  $location = $location.$city;
			  endif;
			  
			  if((!empty($state) && (!empty($city)))):
			  $location = $location.' , '.$state;
			  else:
			  $location = $location.$state;
			  endif;
			  
			  if((!empty($country) && !empty($state) && (!empty($city)))){
			  $location = $location.' , '.$country;
			  }
			  else if((!empty($country) && !empty($state))){
			  $location = $location.' , '.$country;
			  }			  
			  else if(!empty($country) && !empty($city)){
			  $location = $location.' , '.$country;
			  }else{
			  $location = $location.$country;
			  }
		?>
		<p>Location: <?php echo $location; ?></p>
		<p>Website: <a href="<?php echo 'http://'.User::model()->getSiteName($model->siteid);?>" target="_blank"><?php echo User::model()->getSiteName($model->siteid);?></a></p>

		</div>

	</div>

	<div class="clr"></div>
	<div class="user_collection">
	<h3><?php echo ucfirst($model->username)."'s";?> Collection</h3>
	
	<div class="user_collection_box">

            <div class="mosaic-block bar"> <a class="mosaic-overlay" target="_blank" href="http://buildinternet.com/project/mosaic" style="display: inline; left: 0px; bottom: -60px;">
                <div class="details">
                  <p>2012 PRS Private Stock McCarry #3805</p>
                </div>
                </a> <a class="mosaic-backdrop" href="<?php echo $base .'/assets/images/featured-img-large-1.jpg';?>" title=""><img src="<?php echo $base .'/assets/images/user_collection_1.jpg'?>"></a> </div>
            
             
             
             <div class="mosaic-block bar"> <a class="mosaic-overlay" target="_blank" href="http://buildinternet.com/project/mosaic" style="display: inline; left: 0px; bottom: -60px;">
                <div class="details">
                 <p>2012 PRS Private Stock McCarry #3805</p>
                </div>
                </a> <a class="mosaic-backdrop" href="<?php echo $base .'/assets/images/featured-img-large-1.jpg';?>" title=""><img src="<?php echo $base .'/assets/images/user_collection_1.jpg'?>"></a> </div>
                
                
                
            <div class="mosaic-block bar"> <a class="mosaic-overlay" target="_blank" href="http://buildinternet.com/project/mosaic" style="display: inline;">
                <div class="details">
                <p>2012 PRS Private Stock McCarry #3805</p>
                </div>
                </a> <a class="mosaic-backdrop" href="<?php echo $base .'/assets/images/featured-img-large-1.jpg';?>" title=""><img src="<?php echo $base .'/assets/images/user_collection_1.jpg'?>"></a> </div>
                
                
           <div class="mosaic-block bar"> <a class="mosaic-overlay" target="_blank" href="http://buildinternet.com/project/mosaic" style="display: inline;">
                <div class="details">
                  <p>2012 PRS Private Stock McCarry #3805</p>
                </div>
                </a> <a class="mosaic-backdrop" href="<?php echo $base .'/assets/images/featured-img-large-1.jpg';?>" title=""><img src="<?php echo $base .'/assets/images/user_collection_1.jpg'?>"></a> </div>
                
                
                
                
            <div class="mosaic-block bar"> <a class="mosaic-overlay" target="_blank" href="http://buildinternet.com/project/mosaic" style="display: inline;">
                <div class="details">
                 <p>2012 PRS Private Stock McCarry #3805</p>
                </div>
                </a><a class="mosaic-backdrop" href="<?php echo $base .'/assets/images/featured-img-large-1.jpg';?>" title=""><img src="<?php echo $base .'/assets/images/user_collection_1.jpg'?>"></a></div>
                
                
                
                
                
           <div class="mosaic-block bar"> <a class="mosaic-overlay" target="_blank" href="http://buildinternet.com/project/mosaic" style="display: inline;">
                <div class="details">
                 <p>2012 PRS Private Stock McCarry #3805</p>
                </div>
                </a> <a class="mosaic-backdrop" href="<?php echo $base .'/assets/images/featured-img-large-1.jpg';?>" title=""><img src="<?php echo $base .'/assets/images/user_collection_1.jpg'?>"></a></div>
             

             
             
             </div>
	
	


</div>

</div>
	


