<?php
$this->pageTitle=Yii::app()->name . ' - Instrument List';
$this->breadcrumbs=array('Instrument List');

?> 
<div class="column_first">
	<?php $this->widget('InstrumentFilter', array()); ?>
</div>
<div class="column_second">
<?php //echo CHtml::checkbox("load risk",false,array("onChange"=>"js:filterres()"));  //don't forget to register your own function in script tag
//$this->renderPartial('_instrumentList',array('provider'=>$results),false,true);
?>
<?php /* echo CHtml::checkBox("load_ajax",false,array('id'=>'load_risk_all'));echo "Load All Risk Child";
$url=CController::createUrl('InstrumentController/ajaxRequest',array('project_id'=>1));
Yii::app()->clientScript->registerScript("check",
           '$("#load_risk_all").change(function(){
             if($(this).is(":checked")){
              $("#load_risk").load("'.$url.'");
              $("#load_risk").fadeIn();
             }else{
              $("#load_risk").html("");
             }
             })
          ',
           CClientScript::POS_READY); */
 
?>
<div id="load_risk">
</div>
	<?php $this->renderPartial('_instrumentList', array('results'=>$results,'pages' => $pages));
	//$this->renderPartial('_instrumentList', array('results'=>$results,'item_count'=>$item_count,'pageSize'=>$pageSize,'pages'=>$pages,));
	?>        
</div>
<script type="text/javascript">
	$(".search_result_display:even").addClass("even");
	$(".fender_custom_strat li:even").addClass("even");
</script>
