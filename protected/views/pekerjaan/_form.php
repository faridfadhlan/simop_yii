<?php
/* @var $this PekerjaanController */
/* @var $model Pekerjaan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pekerjaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_mulai'); ?>
		<?php echo $form->textField($model,'tgl_mulai'); ?>
		<?php echo $form->error($model,'tgl_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_selesai'); ?>
		<?php echo $form->textField($model,'tgl_selesai'); ?>
		<?php echo $form->error($model,'tgl_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_target'); ?>
		<?php echo $form->textField($model,'jumlah_target'); ?>
		<?php echo $form->error($model,'jumlah_target'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit_target_id'); ?>
		<?php echo $form->textField($model,'unit_target_id'); ?>
		<?php echo $form->error($model,'unit_target_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_creator_id'); ?>
		<?php echo $form->textField($model,'user_creator_id'); ?>
		<?php echo $form->error($model,'user_creator_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_pj_id'); ?>
		<?php echo $form->textField($model,'user_pj_id'); ?>
		<?php echo $form->error($model,'user_pj_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kegiatan_id'); ?>
		<?php echo $form->textField($model,'kegiatan_id'); ?>
		<?php echo $form->error($model,'kegiatan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'before_id'); ?>
		<?php echo $form->textField($model,'before_id'); ?>
		<?php echo $form->error($model,'before_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->