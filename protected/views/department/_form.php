<?php
/* @var $this DepartmentController */
/* @var $model department */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'department-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'department_name'); ?>
		<?php echo $form->textField($model,'department_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'department_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department_code'); ?>
		<?php echo $form->textField($model,'department_code',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'department_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department_address'); ?>
		<?php echo $form->textField($model,'department_address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'department_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department_city'); ?>
		<?php echo $form->textField($model,'department_city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'department_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department_zipCode'); ?>
		<?php echo $form->textField($model,'department_zipCode',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'department_zipCode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->