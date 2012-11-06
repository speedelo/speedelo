<?php
/* @var $this ComercioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comercios',
);

$this->menu=array(
	array('label'=>'Create Comercio', 'url'=>array('create')),
	array('label'=>'Manage Comercio', 'url'=>array('admin')),
);
?>

<h1>Comercios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
