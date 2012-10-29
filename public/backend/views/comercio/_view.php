<?php
/* @var $this ComercioController */
/* @var $data Comercio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comercio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_comercio), array('view', 'id'=>$data->id_comercio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_comercio')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_comercio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rubro_id')); ?>:</b>
	<?php echo CHtml::encode($data->rubro_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>