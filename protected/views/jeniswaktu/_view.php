<?php
/* @var $this JeniswaktuController */
/* @var $data JenisWaktu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_waktu')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_waktu); ?>
	<br />


</div>