<?php
/* @var $this PekerjaanController */
/* @var $model Pekerjaan */

$this->breadcrumbs=array(
	'Pekerjaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pekerjaan', 'url'=>array('index')),
	array('label'=>'Manage Pekerjaan', 'url'=>array('admin')),
);
?>

<h1>Create Pekerjaan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>