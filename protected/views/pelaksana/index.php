<?php
/* @var $this PelaksanaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelaksana Pekerjaans',
);

$this->menu=array(
	array('label'=>'Create PelaksanaPekerjaan', 'url'=>array('create')),
	array('label'=>'Manage PelaksanaPekerjaan', 'url'=>array('admin')),
);
?>

<h1>Pelaksana Pekerjaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
