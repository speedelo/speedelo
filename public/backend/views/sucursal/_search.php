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
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcomercio'); ?>
		<?php echo $form->textField($model,'idcomercio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombresucursal'); ?>
		<?php echo $form->textField($model,'nombresucursal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionsucursal'); ?>
		<?php echo $form->textField($model,'descripcionsucursal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefonosucursal'); ?>
		<?php echo $form->textField($model,'telefonosucursal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correosucursal'); ?>
		<?php echo $form->textField($model,'correosucursal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccionsucursal'); ?>
		<?php echo $form->textField($model,'direccionsucursal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcomuna'); ?>
		<?php echo $form->textField($model,'idcomuna'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadosucursal'); ?>
		<?php echo $form->textField($model,'estadosucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'starcomercio'); ?>
		<?php echo $form->textField($model,'starcomercio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->