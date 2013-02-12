<?php
/* @var $this AddressController */
/* @var $model Address */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'address-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'person_type_id'); ?>
		<?php echo $form->textField($model,'person_type_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'person_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'person_id'); ?>
		<?php echo $form->textField($model,'person_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'person_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->