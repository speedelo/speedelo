<?php
/* @var $this OpcionController */
/* @var $data Opcion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_opcion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_opcion), array('view', 'id'=>$data->id_opcion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::encode($data->id_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_opcion')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_opcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_opcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_opcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_opcion')); ?>:</b>
	<?php echo CHtml::encode($data->estado_opcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />

	*/ ?>

</div>