<?php
$this->pageTitle=Yii::app()->name . ' - Instrument Upload';
$this->breadcrumbs=array('Instrument Upload');
?>

<div class="form">
<?php
$form = $this->beginWidget(
    'CActiveForm',
    array(
        'id' => 'upload-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )
);
// ...
echo $form->labelEx($model, 'image');
echo $form->fileField($model, 'image');
echo $form->error($model, 'image');
// ...
echo CHtml::submitButton('Signup'); 
$this->endWidget();?>

</div><!-- form -->
