<?php
/* @var $this ComercioController */
/* @var $model Comercio */
/* @var $form CActiveForm */
?>

<div id="content-form">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comercio-form',
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_comercio'); ?>
		<?php echo $form->textField($model,'nombre_comercio',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre_comercio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rubro_id'); ?>
		<?php echo $form->textField($model,'rubro_id'); ?>
		<?php echo $form->error($model,'rubro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
 
<?php $this->endWidget(); ?>

</div><!-- form -->

</div>