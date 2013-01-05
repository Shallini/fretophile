<?php 

if(isset(Yii::app()->user->id)):
  $base= Yii::app()->getBaseUrl(true);
  $orgimg = Yii::app()->user->user_image;						
  $img = str_replace('originals', 'tiny', $orgimg);//getting small image path
endif;

 // checking for home page
$controller = Yii::app()->getController();
$isHome = $controller->getId() === 'home' || $controller->getAction()->getId() === 'index';

// Not to display content if it is home page
 
 if ($isHome!=1){?>
	<div class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/logo.png" alt="" /></a></div>
	 <?php include('topsearch.php');?>
	<div class="forum"><a href="#">Forum</a></div>
<?php }?>
	<div class="user_panel">
	    <?php if(!Yii::app()->user->isGuest){?>
		<div class="user_img"><img src="<?php echo $base.'/'.$img; ?>" alt="" /></div>      
		<p class="user_name"><a href="#" class="showhidden"><?php echo Yii::app()->user->name;?></a></p>
		<div class="hidden_popup">
		<ul>
		<li><a href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/editprofile'; ?>">Edit Profile</a></li>
		<li><a href="<?php echo Yii::app()->request->baseUrl.'/index.php/instrument/add'; ?>">Add Instrument</a></li>
		<!-- <li><a href="<?php echo Yii::app()->request->baseUrl.'/index.php/instrument/list'; ?>">List Instrument</a></li> -->
		<li><a href="<?php echo Yii::app()->request->baseUrl.'/index.php/site/logout'; ?>">Logout</a></li>
		</ul>
		</div>
		<?php }else{?>
		<div style="clear:both; height:10px"></div>
		<?php $this->widget('zii.widgets.CMenu',array('items'=>array(
			//array('label'=>'Home', 'url'=>array('post/index')),
			array('label'=>'Sign Up', 'url'=>array('site/signup') , 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
			/* array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),*/
			array('label'=>'Edit Profile', 'url'=>array('site/editprofile'), 'visible'=>!Yii::app()->user->isGuest)
			), 
		)); ?>
		<?php }?>
	</div>
	<div class="clr"></div>
