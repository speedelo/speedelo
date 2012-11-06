<div class="well">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'comercio_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'categoria_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'descripcion',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'tiempo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'precio',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'imagen',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'valoracion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'estado',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fechacreacion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fechamodificacion',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
</div>