<?php

Yii::import('zii.widgets.CPortlet');

class HomeSearch extends CPortlet
{
	
 
    protected function renderContent()
    {
           echo "<div class=\"search_input_container\">".CHtml::beginForm(array('instrument/search'), 'get', array('style'=> 'inline')) .
				CHtml::textField('q', '', array('placeholder'=> 'search...','style'=>'width:140px;')) .
				CHtml::submitButton('Go!',array('style'=>'width:30px;')) .
				CHtml::endForm('')."</div>";
    }	
	
}