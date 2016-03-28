<?php
/* @var $this PelaksanaController */
/* @var $data PelaksanaPekerjaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_alokasi')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_alokasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_target')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_target); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kualitas')); ?>:</b>
	<?php echo CHtml::encode($data->kualitas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pekerjaan_id')); ?>:</b>
	<?php echo CHtml::encode($data->pekerjaan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_pelaksana_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_pelaksana_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_pengalokasi_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_pengalokasi_id); ?>
	<br />

	*/ ?>

</div>