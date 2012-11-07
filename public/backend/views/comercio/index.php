<?php
$this->breadcrumbs=array(
	'Comercios',
);

$this->menu=array(
	array('label'=>'Create Comercio','url'=>array('create')),
	array('label'=>'Manage Comercio','url'=>array('admin')),
);
?>

<h1>Comercios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
