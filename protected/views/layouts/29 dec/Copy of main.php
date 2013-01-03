<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
<!--
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
-->	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div id="wrapper">
	<div class="wrapper_inner">
        <div class="inside">
        	<div class="home_page">
            	<div class="home_page_filler">
                	<div class="user_panel">
					<div class="user_name">
                    <div style="clear:both;height:9px;"></div>
					<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						//array('label'=>'Home', 'url'=>array('post/index')),
						array('label'=>'Sign Up', 'url'=>array('site/signup') , 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Edit Profile', 'url'=>array('site/editprofile'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
				</div>
                    <!--	<div class="user_name"><a href="#">Jon Chickneas</a></div>
                    	<div class="user_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/user-img.jpg" width="39" height="39" /></div>  -->                      
                  	</div><?php echo $content; ?>
            		
                </div>
            </div>
        </div>
	</div>
    <div id="footer">
        <div class="inside">
        	<div class="footer_links">
                <ul>
                    <li><a href="javascript:;">CONTACT</a></li>
                    <li><a href="javascript:;">TERMS</a></li>
                    <li><a href="javascript:;">PRIVACY</a></li>
                </ul>
            </div>            
            <div class="footer_copyright">&copy; 2012 FRETOPHILE</div>            
        </div>
    </div>    
</div>

</body>
</html>