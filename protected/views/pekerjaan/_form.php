<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pekerjaan-form',
        'htmlOptions'=>array('class'=>'form-horizontal'),
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<div class="form-group<?php echo $model->hasErrors('kegiatan_id')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'kegiatan_id', array('class' => 'col-lg-2 control-label')); ?>
    <div class="col-lg-8">
        <?php echo $form->dropDownList($model,'kegiatan_id',CHtml::listData($kegiatans, 'id','nama'),array('class'=>'form-control','prompt'=>'Pilih Kegiatan...')); ?> 
    </div>
</div>
<div class="form-group<?php echo $model->hasErrors('before_id')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'before_id', array('class' => 'col-lg-2 control-label')); ?>
    <div class="col-lg-8">
        <?php echo $form->dropDownList($model,'before_id',CHtml::listData($pekerjaans, 'id','nama'),array('class'=>'form-control','prompt'=>'Pilih Pekerjaan Sebelumnya...')); ?> 
    </div>
</div>
<div class="form-group<?php echo $model->hasErrors('nama')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'nama', array('class' => 'col-lg-2 control-label')); ?>
    <div class="col-lg-8">
        <?php echo $form->textField($model,'nama',array('class' => 'form-control', 'placeholder'=>'Nama Pekerjaan...')); ?>
    </div>
</div>
<div class="form-group<?php echo $model->hasErrors('tgl_mulai')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'tgl_mulai', array('class' => 'col-lg-2 control-label')); ?>
    <div class="col-lg-3 ">
        <div class="input-group date datetimepicker">
        <span class="input-group-addon cursor"><i class="fa fa-calendar"></i></span>
        <?php echo $form->textField($model,'tgl_mulai',array('class' => 'form-control', 'placeholder'=>'Tanggal Mulai...')); ?>
        </div>
    </div>
</div>
<div class="form-group<?php echo $model->hasErrors('tgl_selesai')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'tgl_selesai', array('class' => 'col-lg-2 control-label')); ?>
    <div class="col-lg-3">
        <div class="input-group date datetimepicker">
        <span class="input-group-addon cursor"><i class="fa fa-calendar"></i></span>
        <?php echo $form->textField($model,'tgl_selesai',array('class' => 'form-control', 'placeholder'=>'Tanggal Selesai...')); ?>
        </div>
    </div>
</div>
<div class="form-group<?php echo $model->hasErrors('unit_target_id')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'unit_target_id', array('class' => 'col-lg-2 control-label')); ?>
    <div class="col-lg-8">
        <?php echo $form->dropDownList($model,'unit_target_id',CHtml::listData($units, 'id','nama'),array('class'=>'form-control','prompt'=>'Pilih Satuan Target...')); ?> 
    </div>
</div>
<div class="form-group<?php echo $model->hasErrors('jumlah_target')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'jumlah_target', array('class' => 'col-lg-2 control-label')); ?>
    <div class="col-lg-8">
        <?php echo $form->textField($model,'jumlah_target',array('class' => 'form-control', 'placeholder'=>'Jumlah Target...')); ?>
    </div>
</div>
<div class="form-group<?php echo $model->hasErrors('keterangan')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'keterangan', array('class' => 'col-lg-2 control-label')); ?>
    <div class="col-lg-8">
        <?php echo $form->textArea($model,'keterangan',array('class' => 'form-control', 'placeholder'=>'Keterangan...')); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2"></label>
    <div class="col-lg-2">
        <button type="submit" class="btn btn-info btn-gradient dark btn-block">Simpan</button>
    </div>
</div>

<?php $this->endWidget(); ?>

<?php
$cs=Yii::app()->getClientScript();
$cs->scriptMap=array('jquery.js'=>false);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/public/vendor/plugins/datepicker/js/globalize.min.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/public/vendor/plugins/datepicker/js/moment.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/public/vendor/plugins/datepicker/js/bootstrap-datetimepicker.min.js',CClientScript::POS_END);
$cs->registerCssFile(Yii::app()->request->baseUrl.'/public/vendor/plugins/datepicker/css/bootstrap-datetimepicker.min.css');
$cs->registerScript("sdsd", "
    $('.datetimepicker').datetimepicker({
        format:'YYYY-MM-DD'
    });
");
?>