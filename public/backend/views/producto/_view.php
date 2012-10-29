<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_producto), array('view', 'id'=>$data->id_producto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->id_proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->id_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_producto')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_producto')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo_minimo_producto')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo_minimo_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_producto')); ?>:</b>
	<?php echo CHtml::encode($data->precio_producto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen_producto')); ?>:</b>
	<?php echo CHtml::encode($data->imagen_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valoracion_producto')); ?>:</b>
	<?php echo CHtml::encode($data->valoracion_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_producto')); ?>:</b>
	<?php echo CHtml::encode($data->estado_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />

	*/ ?>

</div>