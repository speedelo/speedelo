<?php
/* @var $this ComercioController */
/* @var $model Comercio */
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
		<?php echo $form->label($model,'nombrecomercio'); ?>
		<?php echo $form->textField($model,'nombrecomercio',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idrubro'); ?>
		<?php echo $form->textField($model,'idrubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadocomercio'); ?>
		<?php echo $form->textField($model,'estadocomercio'); ?>
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