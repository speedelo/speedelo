<?php
/* @var $this RubroController */
/* @var $model Rubro */

$this->breadcrumbs=array(
	'Rubros'=>array('index'),
	$model->id_rubro=>array('view','id'=>$model->id_rubro),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rubro', 'url'=>array('index')),
	array('label'=>'Create Rubro', 'url'=>array('create')),
	array('label'=>'View Rubro', 'url'=>array('view', 'id'=>$model->id_rubro)),
	array('label'=>'Manage Rubro', 'url'=>array('admin')),
);
?>

<h1>Update Rubro <?php echo $model->id_rubro; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>