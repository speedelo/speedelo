<?php
/* @var $this SucursalController */
/* @var $model Sucursal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_sucursal'); ?>
		<?php echo $form->textField($model,'id_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_sucursal'); ?>
		<?php echo $form->textField($model,'nombre_sucursal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_sucursal'); ?>
		<?php echo $form->textField($model,'descripcion_sucursal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_sucursal'); ?>
		<?php echo $form->textField($model,'direccion_sucursal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_sucursal'); ?>
		<?php echo $form->textField($model,'telefono_sucursal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mail_sucursal'); ?>
		<?php echo $form->textField($model,'mail_sucursal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_comercio'); ?>
		<?php echo $form->textField($model,'id_comercio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->