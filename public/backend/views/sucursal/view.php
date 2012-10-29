<?php
/* @var $this SucursalController */
/* @var $model Sucursal */

$this->breadcrumbs=array(
	'Sucursals'=>array('index'),
	$model->id_sucursal,
);

$this->menu=array(
	array('label'=>'List Sucursal', 'url'=>array('index')),
	array('label'=>'Create Sucursal', 'url'=>array('create')),
	array('label'=>'Update Sucursal', 'url'=>array('update', 'id'=>$model->id_sucursal)),
	array('label'=>'Delete Sucursal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sucursal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sucursal', 'url'=>array('admin')),
);
?>

<h1>View Sucursal #<?php echo $model->id_sucursal; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sucursal',
		'nombre_sucursal',
		'descripcion_sucursal',
		'direccion_sucursal',
		'telefono_sucursal',
		'mail_sucursal',
		'id_comercio',
	),
)); ?>
