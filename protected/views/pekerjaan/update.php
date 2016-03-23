<?php
/* @var $this PekerjaanController */
/* @var $model Pekerjaan */

$this->breadcrumbs=array(
	'Pekerjaans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pekerjaan', 'url'=>array('index')),
	array('label'=>'Create Pekerjaan', 'url'=>array('create')),
	array('label'=>'View Pekerjaan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pekerjaan', 'url'=>array('admin')),
);
?>

<h1>Update Pekerjaan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>