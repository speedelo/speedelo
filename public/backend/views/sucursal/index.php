<?php
$this->breadcrumbs=array(
	'Sucursals',
);

$this->menu=array(
	array('label'=>'Create Sucursal','url'=>array('create')),
	array('label'=>'Manage Sucursal','url'=>array('admin')),
);
?>

<h1>Sucursals</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
