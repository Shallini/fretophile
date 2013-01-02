<?php //$this->beginContent('/layouts/main.php'); ?>
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
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/new.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<div id="wrapper">
	<div class="wrapper_inner nobg">
    	<div class="top_bar">
        	<div class="inside">
            	<div class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/logo.png" alt="" /></a></div>
                <div class="topsearch_input_container">
                	<input type="text" value="Fender Custom Shop" />
					<input type="submit" value="GO" />
                </div>
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
                  <!--  <div class="clr"></div>
                    <div class="for_sale"><img src="images/for-sale.jpg" alt="" /></div>
                    <div class="forsalecollection">From the collection of <a href="javascript:;">jchix</a></div>
                    <div class="contact_owner"><a href="javascript:;">Contact Owner >></a></div>-->
              </div>
			  <!--
                <div class="middle_right">
                	<div class="advertisement"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/advertisement.jpg" width="300" height="268" /></div>
                	<div class="similar_instruments">
                    	<h3>Similar Instruments</h3>
                        <ul>
                        	<li>
                            	<div class="similar_instruments_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-1.jpg" width="77" height="58" /></div>
                            	<div class="similar_instruments_description">
                               	  	<h4>2009 PRS Private Stock Signature Limited #3220</h4>
                                    <p>Collection: <a href="javascript:;">user1</a></p>
                                </div>
                            </li>
                            <li>
                            	<div class="similar_instruments_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-2.jpg" /></div>
                            	<div class="similar_instruments_description">
                               	  	<h4>2010 PRS Private Stock Hollow Body II </h4>
                                    <p>Collection: <a href="javascript:;">user2</a></p>
                                </div>
                            </li>
                            
                            <li>
                            	<div class="similar_instruments_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-3.jpg" /></div>
                            	<div class="similar_instruments_description">
                               	  	<h4>2008 PRS Private Stock Custom 24 LTD </h4>
                                    <p>Collection: <a href="javascript:;">user3</a></p>
                                </div>
                            </li>
                            
                            <li>
                            	<div class="similar_instruments_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-4.jpg" /></div>
                            	<div class="similar_instruments_description">
                               	  	<h4>2004 PRS Private Stock JA-15  </h4>
                                    <p>Collection: <a href="javascript:;">user4</a></p>
                                </div>
                            </li>
                            <li>
                            	<div class="similar_instruments_thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/img-5.jpg" /></div>
                            	<div class="similar_instruments_description">
                               	  	<h4>2007 PRS Private Stock McCarty</h4>
                                    <p>Collection: <a href="javascript:;">user5</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
              </div> -->           
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
		
	
<?php //$this->endContent(); ?>