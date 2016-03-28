<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pelaksana-pekerjaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<div class="form-group">
    <label for="bidang_id" class="field-label">Bidang / Unit Kerja</label>
    <?php echo $form->dropDownList(
        $model,
        'bidang_id',
        CHtml::listData($bidangs, 'id', 'nama_bidang'),
        array(
            'class'=>'form-control',
            'prompt'=>'Pilih Bidang...',
            'ajax' => array(
                'type'=>'POST',
                'data'=>array('bidang_id'=>'js:this.value'),
                'url'=>Yii::app()->createUrl('pelaksana/getDropdownSeksi'), //url to call.
                'success'=>'update_seksi_user',
                //'update'=>'#'.CHTML::activeId($model,'user_pelaksana_id'),
            ),
    )); ?>
</div>

<div class="form-group">
    <label for="seksi_id" class="field-label">Seksi</label>
    <?php echo $form->dropDownList(
        $model,
        'seksi_id',
        CHtml::listData($bidangs, 'id', 'nama_seksi'),
        array(
            'class'=>'form-control',
            'prompt'=>'Pilih Seksi...',
            'ajax' => array(
                'type'=>'POST',
                'data'=>array('seksi_id'=>'js:this.value'),
                'url'=>Yii::app()->createUrl('pelaksana/getDropdownUser'), //url to call.
                //'success'=>'update_user',
                'update'=>'#'.CHTML::activeId($model,'user_pelaksana_id'),
            ),
    )); ?>
</div>

<div class="form-group">
    <label for="user_pelaksana_id" class="field-label">Nama Pegawai</label>
    <?php echo $form->dropDownList(
        $model,
        'user_pelaksana_id',
        CHtml::listData(User::model()->findAll('seksi_id=:seksi_id', array(':seksi_id'=>$model->seksi_id)),'id', 'nama'),
        array('class'=>'form-control','prompt'=>'Pilih Nama Pelaksana...')); ?>  
</div>

<div class="form-group">
    <label for="user_pelaksana_id" class="field-label">Jumlah target</label>
    <?php echo $form->textField($model, 'jumlah_target', array("class"=>"form-control"));?> 
</div>


<?php $this->endWidget(); ?>

<?php
$cs = Yii::app()->clientScript;
$cs->scriptMap=array('jquery.js'=>false);
$cs->registerScript("sukses","
    function update_seksi_user(data) {
        $('#".CHtml::activeId($model,'seksi_id')."').html(data);
        $('#".CHtml::activeId($model,'user_pelaksana_id')."').html('<option>Pilih Nama Pelaksana...</option>');
    }
", CClientScript::POS_END);

?>