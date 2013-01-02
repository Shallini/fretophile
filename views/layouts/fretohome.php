<?php $this->beginContent('/layouts/main'); ?>
<div class="wrapper_inner">
        <div class="inside">
        	<div class="home_page">
            	<div class="home_page_filler">
				<?php include('menu.php');?>                	
				<?php echo $content; ?>            		
                </div>
            </div>
        </div>
	</div>
		
	
<?php $this->endContent(); ?>