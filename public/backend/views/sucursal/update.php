<?php
/* @var $this SucursalController */
/* @var $model Sucursal */

$this->breadcrumbs=array(
	'Sucursals'=>array('index'),
	$model->id_sucursal=>array('view','id'=>$model->id_sucursal),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sucursal', 'url'=>array('index')),
	array('label'=>'Create Sucursal', 'url'=>array('create')),
	array('label'=>'View Sucursal', 'url'=>array('view', 'id'=>$model->id_sucursal)),
	array('label'=>'Manage Sucursal', 'url'=>array('admin')),
);
?>

<h1>Update Sucursal <?php echo $model->id_sucursal; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>