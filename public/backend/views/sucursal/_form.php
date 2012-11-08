<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'sucursal-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'idcomercio',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nombresucursal',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'descripcionsucursal',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'telefonosucursal',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'correosucursal',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'direccionsucursal',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'idcomuna',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'estadosucursal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'starsucursal',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
