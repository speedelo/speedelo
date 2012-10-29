<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_categoria'); ?>
		<?php echo $form->textField($model,'id_categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_producto'); ?>
		<?php echo $form->textField($model,'nombre_producto',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_producto'); ?>
		<?php echo $form->textField($model,'descripcion_producto',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiempo_minimo_producto'); ?>
		<?php echo $form->textField($model,'tiempo_minimo_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_producto'); ?>
		<?php echo $form->textField($model,'precio_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imagen_producto'); ?>
		<?php echo $form->textField($model,'imagen_producto',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valoracion_producto'); ?>
		<?php echo $form->textField($model,'valoracion_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_producto'); ?>
		<?php echo $form->textField($model,'estado_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_modificacion'); ?>
		<?php echo $form->textField($model,'fecha_modificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->