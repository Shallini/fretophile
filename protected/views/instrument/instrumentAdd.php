<?php
$this->pageTitle=Yii::app()->name . ' - Instrument Upload';
$this->breadcrumbs=array('Instrument Upload');
?>

<script type="text/javascript">
  $(document).ready(function() {

    $('#brand').keyup(function(event) {
      $('#Instrument_brand').val($('#brand').val());
	  $('#Instrument_tags').val($('#brand').val());
    });

  });
</script>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array('id'=>'instrumentupload-form','enableAjaxValidation'=>true,)); ?>
<?php //echo CHtml::beginForm(); ?>


<div class="msg_list">
	<div class="msg_body"><h1>Instrument Upload</h1>
    
    <div class="upload_box">
		<div class="row">
		<?php echo $form->labelEx($model,'instrument_type'); ?>
		<?php $command = Yii::app()->db->createCommand();
			  $userArray = $command->select('type_id, name')->from('{{itemtype}}')->queryAll();
			  //echo CHtml::dropdownlist('my_dropdown','',CHtml::listData($userArray,'type_id','name'));?>
	    <?php echo $form->dropdownlist($model,'instrument_type',CHtml::listData($userArray,'type_id','name'),array('class'=>'')); ?>
		<?php echo $form->error($model,'instrument_type'); ?>
		</div>
		<div class="row">
		<?php echo $form->labelEx($model,'brand'); ?>	
		<?php
		// ext is a shortcut for application.extensions
		$this->widget('ext.myAutoComplete', array(
			'name' => 'brand',
			'source' => $this->createUrl('instrument/autocomplete'),
		// attribute_value is a custom property that returns the 
		// name of our related object -ie return $model->related_model->name
			'value' => $model->isNewRecord ? '': $model->attribute_value,
			'options' => array(
				'minLength'=>3,
				'autoFill'=>false,
				'focus'=> 'js:function( event, ui ) {
					$( "#brand" ).val( ui.item.name );
					return false;
				}',
				'select'=>'js:function( event, ui ) {
					$("#'.CHtml::activeId($model,'attribute_id').'")
					.val(ui.item.id);
					return false;
				}'
			 ),
			'htmlOptions'=>array('class'=>'input-1', 'autocomplete'=>'off'),
			'methodChain'=>'.data( "autocomplete" )._renderItem = function( ul, item ) {
				return $( "<li></li>" )
					.data( "item.autocomplete", item )
					.append( "<a>" + item.name +  "</a>" )
					.appendTo( ul );
			};'
		));
		?>
		<?php echo $form->hiddenField($model,'brand',array('class'=>'')); ?>
		<?php echo $form->error($model,'brand'); ?>
		
		
		</div>
		<div class="row" >
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('class'=>'')); ?>
		<?php echo $form->error($model,'year'); ?>
		</div>
		<div class="row" >
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('class'=>'')); ?>
		<?php echo $form->error($model,'model'); ?>
		</div>
		<div class="row" >
		<?php echo $form->labelEx($model,'instrument_desc'); ?>
		<?php echo $form->textArea($model,'instrument_desc',array('class'=>'','cols'=>30,'rows'=>5)); ?>
		<?php echo $form->error($model,'instrument_desc'); ?>
		</div>
		<div class="row" >
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',array('class'=>'')); ?>
		<?php echo $form->error($model,'tags'); ?>
		
		</div>
		<div class="row" >
		<?php echo $form->labelEx($model,'forsale'); ?>
		<?php echo $form->dropDownList($model,'forsale', array('1'=>'Yes','2' => 'No'), array('prompt'=>'Select One', 'id'=>'forsale','options'=>array(2=>array('selected'=>'selected')))); ?>
		<?php echo $form->error($model,'forsale'); ?>
		<?php //echo $form->dropDownList($model,'forsale', array('1'=>'jhjj','2' => 'Persona Natural'), array('prompt'=>'Selecci', 'onchange'=>"javascript:cambio_en_TIPO_de_cliente();", 'id'=>'tipodecliente_lst','options'=>array(2=>array('selected'=>'selected'))));?>

		</div>
		<div class="row upload" >
		<?php echo CHtml::submitButton('Submit'); ?>
		</div>
        <div style="clear:both"></div>
   	</div>     
	

<?php //echo CHtml::endForm(); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->
