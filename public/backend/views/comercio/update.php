<?php
/* @var $this ComercioController */
/* @var $model Comercio */

$this->breadcrumbs=array(
	'Comercios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comercio', 'url'=>array('index')),
	array('label'=>'Create Comercio', 'url'=>array('create')),
	array('label'=>'View Comercio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Comercio', 'url'=>array('admin')),
);
?>

<h1>Update Comercio <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>