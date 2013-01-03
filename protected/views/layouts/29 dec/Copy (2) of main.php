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
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/scripts.js" /></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/mosaic.1.0.1.js" /></script>
	<script type="text/javascript"> 
	//$(function () {
	$(document).ready(function() {
		var hiddendivs = $('div.hidden'); //selector for all the hidden div's
		var showmore = $('a.showhidden');

		showmore.live('click', function() {
		$(this).toggleClass('on')
		$(this).parent().nextAll('div.hidden:first').slideToggle(300)
		this.blur()
		return false;
		})

	});
	
	jQuery(function($){
		$('.bar').mosaic({
			animation	:	'slide'
		});
	});
	</script>

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
					<?php include('menu.php');?>
				</div>
                    <!--	<div class="user_name"><a href="#">Jon Chickneas</a></div>
                    	<div class="user_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/user-img.jpg" width="39" height="39" /></div>  -->                      
                  	</div><?php echo $content; ?>
            		
                </div>
            </div>
        </div>
	</div>
     <?php include('footer.php');?>  
</div>

</body>
</html>