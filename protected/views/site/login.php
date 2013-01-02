<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div id="login_box">
<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>true,
)); ?>
<div class="row">
	<p class="note" style="margin:10px 0px 0 0px; font-size:15px; background:#FFFFCC !important; ">Fields with <span class="required">*</span> are required.</p>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username', array('class'=>'')); ?>

		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	<!--	<p class="hint">
			Hint: You may login with <tt>demo/demo</tt>.
		</p>-->
	</div>

	<!--<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
-->
	<div class="row submit">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>
<div style="clear:both;"></div>
</div> <!--login_box id end-->

<?php $this->endWidget(); ?>
</div><!-- form -->
