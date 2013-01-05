<?php $this->beginContent('/layouts/main'); ?>
<div class="wrapper_inner nobg">
	<div class="top_bar">
	<div class="inside">		 
		<?php include('menu.php');?>	   
	</div>		 
	</div>	
	<div class="middle_container">
		<div class="inside">
			<div class="middle_left">
			  <?php echo $content; ?>	  
		  </div>				  
		</div>
	</div>
</div>
 
<?php $this->endContent(); ?>