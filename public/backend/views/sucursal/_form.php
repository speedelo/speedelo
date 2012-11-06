<?php
/* @var $this SucursalController */
/* @var $model Sucursal */
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

	<?php $form->textFieldRow($model,'idcomercio') ; ?>

	<?php echo $form->textFieldRow($model,'nombresucursal',array('class'=>'span5','placeholder'=>'Nombre Sucursal')); ?>

	<?php echo $form->textFieldRow($model,'descripcionsucursal',array('class'=>'span5','placeholder'=>'Descripcion Sucursal')); ?>


	<?php echo $form->textFieldRow($model,'telefonosucursal',array('class'=>'span5','placeholder'=>'Telefono Sucursal')); ?>

	<?php echo $form->textFieldRow($model,'correosucursal',array('class'=>'span5','placeholder'=>'Correo Sucursal')); ?>


	<?php echo $form->textFieldRow($model,'direccionsucursal',array('class'=>'span5','placeholder'=>'Direccion Sucursal')); ?>


	<?php echo $form->textFieldRow($model,'idcomuna',array('class'=>'span5','placeholder'=>'Comuna Sucursal')); ?>

	<?php echo $form->hiddenField($model,'estadosucursal',array('class'=>'span5','placeholder'=>'Estado Sucursal')); ?>


	<?php echo $form->hiddenField($model,'starsucursal',array('class'=>'span5')); ?>

        <div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
</div>