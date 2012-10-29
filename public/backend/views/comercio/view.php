<?php
/* @var $this ComercioController */
/* @var $model Comercio */

$this->breadcrumbs=array(
	'Comercios'=>array('index'),
	$model->id_comercio,
);

$this->menu=array(
	array('label'=>'List Comercio', 'url'=>array('index')),
	array('label'=>'Create Comercio', 'url'=>array('create')),
	array('label'=>'Update Comercio', 'url'=>array('update', 'id'=>$model->id_comercio)),
	array('label'=>'Delete Comercio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_comercio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comercio', 'url'=>array('admin')),
);
?>

<h1>View Comercio #<?php echo $model->id_comercio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_comercio',
		'nombre_comercio',
		'rubro_id',
		'estado',
	),
)); ?>
