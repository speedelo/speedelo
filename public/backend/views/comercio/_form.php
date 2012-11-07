<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'comercio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nombrecomercio',array('class'=>'span5','maxlength'=>200)); ?><br>

	 <?php echo $form->dropDownList($model,'idrubro',$this->getNameRubro(),array('class'=>'span5','prompt'=>'Rubro..'));?>

	<?php echo $form->textFieldRow($model,'estadocomercio',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'starcomercio',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
