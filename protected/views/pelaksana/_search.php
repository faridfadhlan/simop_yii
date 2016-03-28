<?php
/* @var $this PelaksanaController */
/* @var $model PelaksanaPekerjaan */
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
		<?php echo $form->label($model,'tgl_alokasi'); ?>
		<?php echo $form->textField($model,'tgl_alokasi'); ?>
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
		<?php echo $form->label($model,'kualitas'); ?>
		<?php echo $form->textField($model,'kualitas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pekerjaan_id'); ?>
		<?php echo $form->textField($model,'pekerjaan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_pelaksana_id'); ?>
		<?php echo $form->textField($model,'user_pelaksana_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_pengalokasi_id'); ?>
		<?php echo $form->textField($model,'user_pengalokasi_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->