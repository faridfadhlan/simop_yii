<?php
/* @var $this JeniswaktuController */
/* @var $model JenisWaktu */

$this->breadcrumbs=array(
	'Jenis Waktus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisWaktu', 'url'=>array('index')),
	array('label'=>'Create JenisWaktu', 'url'=>array('create')),
	array('label'=>'View JenisWaktu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JenisWaktu', 'url'=>array('admin')),
);
?>

<h1>Update JenisWaktu <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>