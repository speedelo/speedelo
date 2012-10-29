<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor'); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_categoria'); ?>
		<?php echo $form->textField($model,'id_categoria'); ?>
		<?php echo $form->error($model,'id_categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_producto'); ?>
		<?php echo $form->textField($model,'nombre_producto',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_producto'); ?>
		<?php echo $form->textField($model,'descripcion_producto',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempo_minimo_producto'); ?>
		<?php echo $form->textField($model,'tiempo_minimo_producto'); ?>
		<?php echo $form->error($model,'tiempo_minimo_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_producto'); ?>
		<?php echo $form->textField($model,'precio_producto'); ?>
		<?php echo $form->error($model,'precio_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen_producto'); ?>
		<?php echo $form->textField($model,'imagen_producto',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'imagen_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valoracion_producto'); ?>
		<?php echo $form->textField($model,'valoracion_producto'); ?>
		<?php echo $form->error($model,'valoracion_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_producto'); ?>
		<?php echo $form->textField($model,'estado_producto'); ?>
		<?php echo $form->error($model,'estado_producto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->