<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcomercio')); ?>:</b>
	<?php echo CHtml::encode($data->idcomercio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombresucursal')); ?>:</b>
	<?php echo CHtml::encode($data->nombresucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionsucursal')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionsucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonosucursal')); ?>:</b>
	<?php echo CHtml::encode($data->telefonosucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correosucursal')); ?>:</b>
	<?php echo CHtml::encode($data->correosucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccionsucursal')); ?>:</b>
	<?php echo CHtml::encode($data->direccionsucursal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idcomuna')); ?>:</b>
	<?php echo CHtml::encode($data->idcomuna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadosucursal')); ?>:</b>
	<?php echo CHtml::encode($data->estadosucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('starsucursal')); ?>:</b>
	<?php echo CHtml::encode($data->starsucursal); ?>
	<br />

	*/ ?>

</div>