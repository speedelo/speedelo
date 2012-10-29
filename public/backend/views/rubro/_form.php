<?php
/* @var $this RubroController */
/* @var $model Rubro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rubro-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_rubro'); ?>
		<?php echo $form->textField($model,'nombre_rubro',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre_rubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_comercio'); ?>
		<?php echo $form->textField($model,'id_comercio'); ?>
		<?php echo $form->error($model,'id_comercio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->