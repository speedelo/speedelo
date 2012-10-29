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
		<?php echo $form->label($model,'id_comercio'); ?>
		<?php echo $form->textField($model,'id_comercio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_comercio'); ?>
		<?php echo $form->textField($model,'nombre_comercio',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rubro_id'); ?>
		<?php echo $form->textField($model,'rubro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->