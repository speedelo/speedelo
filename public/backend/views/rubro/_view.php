<?php
/* @var $this RubroController */
/* @var $data Rubro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rubro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_rubro), array('view', 'id'=>$data->id_rubro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_rubro')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_rubro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comercio')); ?>:</b>
	<?php echo CHtml::encode($data->id_comercio); ?>
	<br />


</div>