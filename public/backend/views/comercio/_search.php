<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nombrecomercio',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'idrubro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'estadocomercio',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'starcomercio',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
