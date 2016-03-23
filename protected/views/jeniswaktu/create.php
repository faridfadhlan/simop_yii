<?php
/* @var $this JeniswaktuController */
/* @var $model JenisWaktu */

$this->breadcrumbs=array(
	'Jenis Waktus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisWaktu', 'url'=>array('index')),
	array('label'=>'Manage JenisWaktu', 'url'=>array('admin')),
);
?>

<h1>Create JenisWaktu</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>