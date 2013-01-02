<?php $this->beginContent('/layouts/main'); ?>
<div class="wrapper_inner nobg">
	<div class="top_bar">
	<div class="inside">
			
            	 <div class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/logo.png" alt="" /></a></div>
                <div class="topsearch_input_container">
                	<input type="text" value="Fender Custom Shop" />
					<input type="submit" value="GO" />
                </div>
                <div class="forum"><a href="#">Forum</a></div>
				<?php include('menu.php');?>
               <!-- <div class="user_panel">
				<?php //include('menu.php');?>
                </div>
            	<div class="clr"></div>-->
            </div>		 
	</div>	
	<div class="middle_container">
		<div class="inside">
			<div class="upload_left">
			  <?php echo $content; ?>	  
		  </div>				  
		</div>
	</div>
</div>
 
<?php $this->endContent(); ?>