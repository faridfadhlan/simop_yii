<?php
/* @var $this PekerjaanController */
/* @var $data Pekerjaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_target')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_target); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_target_id')); ?>:</b>
	<?php echo CHtml::encode($data->unit_target_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_creator_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_creator_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_pj_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_pj_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kegiatan_id')); ?>:</b>
	<?php echo CHtml::encode($data->kegiatan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('before_id')); ?>:</b>
	<?php echo CHtml::encode($data->before_id); ?>
	<br />

	*/ ?>

</div>