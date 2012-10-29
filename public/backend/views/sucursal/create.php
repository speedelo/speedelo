<?php
/* @var $this SucursalController */
/* @var $model Sucursal */

$this->breadcrumbs=array(
	'Sucursals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sucursal', 'url'=>array('index')),
	array('label'=>'Manage Sucursal', 'url'=>array('admin')),
);
?>

<h1>Crear<span class="color"> Sucursal</span></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>