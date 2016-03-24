<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kegiatan-form',
        'htmlOptions'=>array('class'=>'form-horizontal'),
	'enableAjaxValidation'=>false,
)); ?>

<div class="form-group<?php echo $model->hasErrors('nama')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'nama', array('class' => 'col-lg-3 control-label')); ?>
    <div class="col-lg-8">
        <?php echo $form->textField($model,'nama',array('maxlength'=>255,'class' => 'form-control', 'placeholder'=>'Nama Kegiatan...')); ?>
    </div>
</div>
<div class="form-group<?php echo $model->hasErrors('jenis_waktu_id')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'jenis_waktu_id', array('class' => 'col-lg-3 control-label')); ?>
    <div class="col-lg-8">
        <?php echo $form->dropDownList($model,'jenis_waktu_id',CHtml::listData($jenis_waktus, 'id','jenis_waktu'),array('class'=>'form-control','prompt'=>'Pilih Jenis Waktu...')); ?> 
    </div>
</div>
<div class="form-group<?php echo $model->hasErrors('nilai_waktu')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'nilai_waktu', array('class' => 'col-lg-3 control-label')); ?>
    <div class="col-lg-8">
        <?php echo $form->textField($model,'nilai_waktu',array('class' => 'form-control', 'placeholder'=>'Waktu Kegiatan...')); ?>
    </div>
</div>
<div class="form-group<?php echo $model->hasErrors('tahun')?' has-error':'';?>">
    <?php echo $form->labelEx($model,'tahun', array('class' => 'col-lg-3 control-label')); ?>
    <div class="col-lg-8">
        <?php echo $form->textField($model,'tahun',array('class' => 'form-control', 'placeholder'=>'Tahun Kegiatan...')); ?>
    </div>
</div>
<div class="form-group">
    <label class="col-lg-3"></label>
    <div class="col-lg-2">
        <button type="submit" class="btn btn-info btn-gradient dark btn-block">Simpan</button>
    </div>
</div>

<?php $this->endWidget(); ?>