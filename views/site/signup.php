<?php
$this->pageTitle=Yii::app()->name . ' - Signup';
$this->breadcrumbs=array(
	'Signup',
);

?>
<?php
// using jquery $(document).ready in yii
    Yii::app()->clientScript->registerScript('signupscript','$("#bussinessname").hide();',CClientScript::POS_READY);
?>
<script type="text/javascript">
/* $(document).ready(function(){
	$("#bussinessname").hide();
	
}); */
</script>
<div id="signup_box">

<h1>Signup</h1>

<?php 
$form=$this->beginWidget('CActiveForm', array('id'=>'signup-form','enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype' => 'multipart/form-data',),)); 
	//'clientOptions'=>array(		'validateOnSubmit'=>true,	),
?>
<p>Please fill out the following form with your credentials:</p>

<div class="form">
<?php //echo $form->errorSummary($model); ?>

<?php if(Yii::app()->user->hasFlash('signup')): ?>
<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('signup'); ?>
</div>
<?php endif;?>
	<p class="note" style="margin:10px 25px 0 20px; font-size:15px; background:#FFFFCC !important; ">Fields with <span class="required">*</span> are required.</p>
    
    <div class="signup_left">
    
	<div class="row" id="usertypedropdown">
		<?php echo $form->labelEx($model,'usertype'); ?>
		<?php echo $form->dropDownList($model,'usertype',Usertype::items('usertypeid'),array(
                                          'empty'=>'Choose one', 
                                          'onchange'=>'var selectedval = $(this).val();  
											  if(selectedval == 1){
												$("#bussinessname").show();
												$("#firstnamediv").hide();
												$("#lastnamediv").hide();
											  }else{
												$("#bussinessname").hide();
												$("#firstnamediv").show();
												$("#lastnamediv").show();
											  }',
                                          )
); ?>
		<?php echo $form->error($model,'usertype'); ?>		
	</div>
	<div class="row" id="firstnamediv">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname'); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row" id="lastnamediv">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname'); ?>
		<?php echo $form->error($model,'lastname'); ?>		
	</div>
	
	<div class="row" id="bussinessname">
		<?php echo $form->labelEx($model,'bussname'); ?>
		<?php echo $form->textField($model,'bussname',array('class'=>'signup_input')); ?>
		<?php echo $form->error($model,'bussname'); ?>		
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>		
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password1'); ?>
		<?php echo $form->error($model,'password1'); ?>		
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'password2'); ?>
		<?php echo $form->passwordField($model,'password2'); ?>
		<?php echo $form->error($model,'password2'); ?>		
	</div>
    
</div><!-- signup_left id end -->
    <div class="signup_right">

	<div class="row">
		<?php echo $form->labelEx($model,'avatarimage'); ?>
		<?php //echo $form->fileField($model,'avatarimage'); ?>
		<?php echo CHtml::activeFileField($model, 'avatarimage'); // by this we can upload image?>  
		<?php echo $form->error($model,'avatarimage'); ?>		
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city'); ?>
		<?php echo $form->error($model,'city'); ?>		
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>		
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country'); ?>
		<?php echo $form->error($model,'country'); ?>		
	</div>
	
	<?php if(extension_loaded('gd')): ?>
	<!--<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
        <div style="clear:both"></div>
		<?php echo $form->textField($model,'verifyCode'); ?>
		<?php echo $form->error($model,'verifyCode'); ?>	
		</div>
		<div class="hint">Please enter the letters as they are shown  <br/>
        in the image above. Letters are not case-sensitive.</div>
	</div> -->
	<?php endif; ?>
	
	
	
	<div class="row signup">
		<?php echo CHtml::submitButton('Signup'); ?>
	</div>
</div><!-- signup_right id end -->
<?php $this->endWidget(); ?>
</div><!-- form -->

<div style="clear:both; height:20px;"></div>

</div><!-- signup_box id end -->
