<?php
/* @var $this PekerjaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pekerjaans',
);

$this->menu=array(
	array('label'=>'Create Pekerjaan', 'url'=>array('create')),
	array('label'=>'Manage Pekerjaan', 'url'=>array('admin')),
);
?>

<h1>Pekerjaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
