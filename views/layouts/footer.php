<div id="footer">
        <div class="inside">
        	<div class="footer_links">
			<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'CONTACT', 'url'=>array('site/page?view=support')),
						array('label'=>'ABOUT', 'url'=>array('site/page?view=about')),
						array('label'=>'PRIVACY', 'url'=>array('site/page?view=privacy')),					
						
					),
				)); ?>
                
            </div>            
            <div class="footer_copyright">&copy; 2012 FRETOPHILE</div>            
        </div>
    </div>    