<?php
/* @var $this JeniswaktuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Waktus',
);

$this->menu=array(
	array('label'=>'Create JenisWaktu', 'url'=>array('create')),
	array('label'=>'Manage JenisWaktu', 'url'=>array('admin')),
);
?>

<h1>Jenis Waktus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
