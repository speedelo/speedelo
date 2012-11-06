<div class="well">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'producto-form',
	'enableAjaxValidation'=>false,   
 ));


?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nombrerubro',array('class'=>'span5','placeholder'=>'Descripcion Sucursal')); ?>


	<?php echo $form->hiddenfield($model,'estadorubro',array('class'=>'span5','placeholder'=>'Descripcion Sucursal')); ?>

<?php echo $form->hiddenField($model,'starrubro',array('class'=>'span5','placeholder'=>'Descripcion Sucursal')); ?>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->