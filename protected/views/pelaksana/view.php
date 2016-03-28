<?php
/* @var $this PelaksanaController */
/* @var $model PelaksanaPekerjaan */

$this->breadcrumbs=array(
	'Pelaksana Pekerjaans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PelaksanaPekerjaan', 'url'=>array('index')),
	array('label'=>'Create PelaksanaPekerjaan', 'url'=>array('create')),
	array('label'=>'Update PelaksanaPekerjaan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PelaksanaPekerjaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PelaksanaPekerjaan', 'url'=>array('admin')),
);
?>

<h1>View PelaksanaPekerjaan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tgl_alokasi',
		'jumlah_target',
		'keterangan',
		'kualitas',
		'pekerjaan_id',
		'user_pelaksana_id',
		'user_pengalokasi_id',
	),
)); ?>
