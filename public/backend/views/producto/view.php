<?php
$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Producto','url'=>array('index')),
	array('label'=>'Create Producto','url'=>array('create')),
	array('label'=>'Update Producto','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Producto','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Producto','url'=>array('admin')),
);
?>

<h1>View Producto #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'comercio_id',
		'categoria_id',
		'nombre',
		'descripcion',
		'tiempo',
		'precio',
		'imagen',
		'valoracion',
		'estado',
		'fechacreacion',
		'fechamodificacion',
	),
)); ?>
<h3>Opciones</h3>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'opcion-grid',
	'dataProvider'=>$lista_opciones,
	'columns'=>array(
		'id',
		'producto_id',
		'nombre',
		'descripcion',
		'stock',
		'estado',
		/*
		'fechacreacion',
		'fechamodificacion',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
