<?php //$this->beginContent('/layouts/main.php'); ?>
<?php $this->beginContent('/layouts/main'); ?>

	<div class="wrapper_inner nobg">
    	<div class="top_bar">
        	<div class="inside">
            	<div class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/logo.png" alt="" /></a></div>
                <?php include('topsearch.php');?>
                <div class="forum"><a href="#">Forum</a></div>
                <div class="user_panel">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						//array('label'=>'Home', 'url'=>array('post/index')),
						array('label'=>'Sign Up', 'url'=>array('site/signup') , 'visible'=>Yii::app()->user->isGuest ),
						array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Edit Profile', 'url'=>array('site/editprofile/'.Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
                    <!-- <div class="user_name"><a href="#">Jon Chickneas</a></div>
                    <div class="user_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/user-img.jpg" width="39" height="39" /></div>  
-->					
                </div>
            	<div class="clr"></div>
            </div>
        </div>
        
        <div class="middle_container">
            <div class="inside">
            	<div class="">
               	  <?php echo $content; ?>
                 
              </div>
			         
            </div>
        </div>
	</div>
    
		
	
<?php $this->endContent(); ?>