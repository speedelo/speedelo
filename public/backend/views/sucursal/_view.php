<?php
/* @var $this SucursalController */
/* @var $data Sucursal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sucursal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sucursal), array('view', 'id'=>$data->id_sucursal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_sucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_sucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_sucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_sucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail_sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->mail_sucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comercio')); ?>:</b>
	<?php echo CHtml::encode($data->id_comercio); ?>
	<br />


</div>