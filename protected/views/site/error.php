<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>Error <?php echo $code; ?></h2>

<div class="error" style="border:1px solid red;height:10px;">
<?php echo CHtml::encode($message); ?>
</div>