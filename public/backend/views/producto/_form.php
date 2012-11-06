<div class="well">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'producto-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'comercio_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'categoria_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textAreaRow($model,'descripcion',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'tiempo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'precio',array('class'=>'span5')); ?>

	<?php echo $form->fileFieldRow($model,'imagen',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'valoracion',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'estado',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'fechacreacion',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'fechamodificacion',array('class'=>'span5', 'value'=>date("Y-m-d H:i:s") )); ?>
        
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
</div>