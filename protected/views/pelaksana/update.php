<?php
/* @var $this PelaksanaController */
/* @var $model PelaksanaPekerjaan */

$this->breadcrumbs=array(
	'Pelaksana Pekerjaans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PelaksanaPekerjaan', 'url'=>array('index')),
	array('label'=>'Create PelaksanaPekerjaan', 'url'=>array('create')),
	array('label'=>'View PelaksanaPekerjaan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PelaksanaPekerjaan', 'url'=>array('admin')),
);
?>

<h1>Update PelaksanaPekerjaan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>