<?php
/* @var $this OpcionController */
/* @var $model Opcion */

$this->breadcrumbs=array(
	'Opcions'=>array('index'),
	$model->id_opcion,
);

$this->menu=array(
	array('label'=>'List Opcion', 'url'=>array('index')),
	array('label'=>'Create Opcion', 'url'=>array('create')),
	array('label'=>'Update Opcion', 'url'=>array('update', 'id'=>$model->id_opcion)),
	array('label'=>'Delete Opcion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_opcion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opcion', 'url'=>array('admin')),
);
?>

<h1>View Opcion #<?php echo $model->id_opcion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_opcion',
		'id_producto',
		'nombre_opcion',
		'descripcion_opcion',
		'stock',
		'estado_opcion',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
