<?php
/* @var $this OpcionController */
/* @var $model Opcion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'opcion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
		<?php echo $form->error($model,'id_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_opcion'); ?>
		<?php echo $form->textField($model,'nombre_opcion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre_opcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_opcion'); ?>
		<?php echo $form->textField($model,'descripcion_opcion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'descripcion_opcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'estado_opcion'); ?>
		<?php echo $form->hiddenField($model,'estado_opcion'); ?>
		<?php echo $form->error($model,'estado_opcion'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->hiddenField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'fecha_modificacion'); ?>
		<?php echo $form->hiddenField($model,'fecha_modificacion'); ?>
		<?php echo $form->error($model,'fecha_modificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->