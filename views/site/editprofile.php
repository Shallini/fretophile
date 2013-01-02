<?php
$this->pageTitle=Yii::app()->name . ' - Account Settings';
$this->breadcrumbs=array('Account Settings',);
?>
<?php
// using jquery $(document).ready in yii
    Yii::app()->clientScript->registerScript('editprofilescript','$(".msg_body").hide();$(".msg_head").click(function(){
		$(this).next("div") .next(".msg_body") .slideToggle(600);
	});',CClientScript::POS_READY);
?>
<?php $firstname = Yii::app()->user->first_name;?> 
<?php 
    $info =  Yii::app()->user->user_information;
	$lastname = $info['lastname'];
	$username = $info['username'];
	$email = $info['email'];
	$city = $info['city'];
	$state = $info['state'];
	$country = $info['country'];
	
  if(isset(Yii::app()->user->id)):
  $base= Yii::app()->getBaseUrl(true);
  $orgimg = Yii::app()->user->user_image;						
  $img = str_replace('originals', 'tiny', $orgimg);//getting small image path
  endif;
?> 



<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'editprofile-form',
	'enableAjaxValidation'=>true,
)); ?>
<div class="edit_profile_box">
<h1>Account Settings</h1>
<div class="msg_list">
<div class="table_box">
<p class="msg_head">
<span class="col1">Name</span>
<span class="col2"><?php echo $firstname.' '.$lastname;?></span>
<span class="col3">Edit</span>
</p>
<div style="clear:both"></div>
	<div class="msg_body">
		<div class="row" id="firstnamediv">
			<?php echo $form->labelEx($model,'firstname'); ?>
			<?php echo $form->textField($model,'firstname',array('class'=>'', 'value'=>$firstname)); ?>
			<?php echo $form->error($model,'firstname'); ?>
		</div>

		<div class="row" id="lastnamediv">
			<?php echo $form->labelEx($model,'lastname'); ?>
			<?php echo $form->textField($model,'lastname',array('class'=>'', 'value'=>$lastname)); ?>
			<?php echo $form->error($model,'lastname'); ?>		
		</div>
	</div>

	<p class="msg_head">
	<span class="col1">Location</span>
	<span class="col2"><?php echo $city.' '.$state.' '.$country;?></span>
	<span class="col3">Edit</span>
	 </p>
	 <div style="clear:both"></div>
	<div class="msg_body">
		<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('class'=>'', 'value'=>$city)); ?>
		<?php echo $form->error($model,'city'); ?>		
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'state'); ?>
			<?php echo $form->textField($model,'state',array('class'=>'', 'value'=>$state,)); ?>
			<?php echo $form->error($model,'state'); ?>
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'country'); ?>
			<?php echo $form->textField($model,'country',array('class'=>'', 'value'=>$country)); ?>
			<?php echo $form->error($model,'country'); ?>	
		    
		</div>
		<div class="row submit">
		<?php //echo CHtml::submitButton('Cityupdate'); ?>
	    </div>
	</div>

	<p class="msg_head">
		<span class="col1">Username</span>
		<span class="col2"><?php echo $username; ?></span>
		<span class="col3">Edit</span>
	 </p>
	 <div style="clear:both"></div>
	<div class="msg_body">
		<div class="row">
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username', array('value'=>$username,'readonly'=>'readonly')); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>
	</div>

	<p class="msg_head">
	<span class="col1">Email</span>
		<span class="col2"><?php echo $email; ?></span>
		<span class="col3">Edit</span>
	 </p>
	 <div style="clear:both"></div>
	<div class="msg_body">
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email', array('value'=>$email,)); ?>
		<?php echo $form->error($model,'email'); ?>		
	    </div>
	</div>
	<p class="msg_head">
	<span class="col1">Password</span>
		<span class="col2">&nbsp;</span>
		<span class="col3">Edit</span>
		</p>
		<div style="clear:both"></div>
		<div class="msg_body">
			<div class="row">
			<?php echo $form->labelEx($model,'newpassword'); ?>
			<?php echo $form->passwordField($model,'newpassword',array('class'=>'signup_input')); ?>
			<?php echo $form->error($model,'newpassword'); ?>		
		</div>
		<div class="row">
			<?php echo $form->labelEx($model,'newpassword2'); ?>
			<?php echo $form->passwordField($model,'newpassword2',array('class'=>'signup_input')); ?>
			<?php echo $form->error($model,'newpassword2'); ?>		
		</div>
	</div>

	<p class="msg_head">
	<span class="col1">Avatar</span>
		<span class="col2"><img src="<?php echo $base.'/'.$img; ?>" style="padding-top:7px;"></span>
		<span class="col3">Edit</span></p>
		<div style="clear:both"></div>
	<div class="msg_body">
		<div class="row">
		<?php echo $form->labelEx($model,'avatarimage'); ?>
		<?php echo $form->fileField($model,'avatarimage'); ?>
		<?php echo $form->error($model,'avatarimage'); ?>		
		</div>
	</div>

<div class="submit_button_edit">
<?php echo CHtml::submitButton('Update'); ?>
</div>	</div>

		<div style="clear:both"></div>
</div>
</div>	
	

<?php $this->endWidget(); ?>
</div><!-- form -->
