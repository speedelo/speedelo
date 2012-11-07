<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombrerubro')); ?>:</b>
	<?php echo CHtml::encode($data->nombrerubro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadorubro')); ?>:</b>
	<?php echo CHtml::encode($data->estadorubro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('starrubro')); ?>:</b>
	<?php echo CHtml::encode($data->starrubro); ?>
	<br />


</div>