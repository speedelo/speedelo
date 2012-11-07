<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombrecomercio')); ?>:</b>
	<?php echo CHtml::encode($data->nombrecomercio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idrubro')); ?>:</b>
	<?php echo CHtml::encode($data->idrubro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadocomercio')); ?>:</b>
	<?php echo CHtml::encode($data->estadocomercio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('starcomercio')); ?>:</b>
	<?php echo CHtml::encode($data->starcomercio); ?>
	<br />


</div>