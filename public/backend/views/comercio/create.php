<?php
/* @var $this ComercioController */
/* @var $model Comercio */

$this->breadcrumbs=array(
	'Comercios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comercio', 'url'=>array('index')),
	array('label'=>'Manage Comercio', 'url'=>array('admin')),
);
?>

<h1>Create Comercio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>