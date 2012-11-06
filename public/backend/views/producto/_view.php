<div class="view well">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comercio_id')); ?>:</b>
	<?php echo CHtml::encode($data->comercio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_id')); ?>:</b>
	<?php echo CHtml::encode($data->categoria_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />
        
	<b> <?php  echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
           <?php echo CHtml::encode($data->imagen); ?>
	<br />
             
	<b><?php echo CHtml::encode($data->getAttributeLabel('valoracion')); ?>:</b>
	<?php echo CHtml::encode($data->valoracion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechacreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechamodificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechamodificacion); ?>
	<br />

	

</div>