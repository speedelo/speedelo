<?php
/* @var $this SucursalController */
/* @var $model Sucursal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sucursal-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_sucursal'); ?>
		<?php echo $form->textField($model,'nombre_sucursal',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_sucursal'); ?>
		<?php echo $form->textField($model,'descripcion_sucursal',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_sucursal'); ?>
		<?php echo $form->textField($model,'direccion_sucursal',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'direccion_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_sucursal'); ?>
		<?php echo $form->textField($model,'telefono_sucursal',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'telefono_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail_sucursal'); ?>
		<?php echo $form->textField($model,'mail_sucursal',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'mail_sucursal'); ?>
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