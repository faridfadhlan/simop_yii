<?php
/* @var $this PekerjaanController */
/* @var $model Pekerjaan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_mulai'); ?>
		<?php echo $form->textField($model,'tgl_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_selesai'); ?>
		<?php echo $form->textField($model,'tgl_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_target'); ?>
		<?php echo $form->textField($model,'jumlah_target'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unit_target_id'); ?>
		<?php echo $form->textField($model,'unit_target_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_creator_id'); ?>
		<?php echo $form->textField($model,'user_creator_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_pj_id'); ?>
		<?php echo $form->textField($model,'user_pj_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kegiatan_id'); ?>
		<?php echo $form->textField($model,'kegiatan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'before_id'); ?>
		<?php echo $form->textField($model,'before_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->