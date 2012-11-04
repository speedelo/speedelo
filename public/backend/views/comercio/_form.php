<?php
/* @var $this ComercioController */
/* @var $model Comercio */
/* @var $form CActiveForm */
?>

<div class="well">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'producto-form',
	'enableAjaxValidation'=>false,   
 ));


?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nombrecomercio',array('class'=>'span5','placeholder'=>'Nombre Comercio')).'<br>'; ?>

    	<?php echo $form->dropDownList($model,'idrubro',$this->getNameRubro(),array('class'=>'span5','prompt'=>'Rubro..'));?>

	<?php echo $form->hiddenField($model,'estadocomercio',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'starcomercio',array('class'=>'span5')); ?>
	
        <div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
</div>