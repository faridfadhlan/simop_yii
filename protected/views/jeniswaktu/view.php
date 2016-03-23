<?php
/* @var $this JeniswaktuController */
/* @var $model JenisWaktu */

$this->breadcrumbs=array(
	'Jenis Waktus'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JenisWaktu', 'url'=>array('index')),
	array('label'=>'Create JenisWaktu', 'url'=>array('create')),
	array('label'=>'Update JenisWaktu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JenisWaktu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisWaktu', 'url'=>array('admin')),
);
?>

<h1>View JenisWaktu #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'jenis_waktu',
	),
)); ?>
