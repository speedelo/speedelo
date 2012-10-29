<?php
/* @var $this RubroController */
/* @var $model Rubro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_rubro'); ?>
		<?php echo $form->textField($model,'id_rubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_rubro'); ?>
		<?php echo $form->textField($model,'nombre_rubro',array('size'=>60,'maxlength'=>200)); ?>
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