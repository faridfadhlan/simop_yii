<div class="admin-form theme-info" id="login1">
    <div class="row mb15 table-layout">
        
    </div>

    <div class="panel panel-info mt10 br-n">
        <div class="panel-heading heading-border bg-white" style="padding:15px 10px 10px 10px;">
            <h4 style="text-align: center;color: #0B627E;">SISTEM MONITORING PEKERJAAN BPS PROVINSI KALIMANTAN BARAT</h4>
        </div>
        <!-- end .form-header section -->
        <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'login-form',
                'enableClientValidation'=>false,
        )); ?>
            <div class="panel-body bg-light p30">
                <div class="row">
                    <div class="section form-group has-error">
                        <?php echo $form->labelEx($model,'username', array("class"=>"field-label text-muted fs18 mb10")); ?>
                        <label for="username" class="field prepend-icon">
                            <?php echo $form->textField($model,'username', array("class"=>"gui-input", "placeholder"=>"Enter Username")); ?>
                            <label for="username" class="field-icon"><i class="fa fa-user"></i></label>
                        </label>
                    </div>
                    <!-- end section -->
                    <div class="section">
                        <?php echo $form->labelEx($model,'password', array("class"=>"field-label text-muted fs18 mb10")); ?>
                        <label for="password" class="field prepend-icon">
                            <?php echo $form->passwordField($model,'password', array("class"=>"state-error gui-input", "placeholder"=>"Enter Password")); ?>
                            <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                            </label>
                        </label>
                    </div>
                    <!-- end section -->
                </div>
            </div>
            <!-- end .form-body section -->
            <div class="panel-footer clearfix p10 ph15">
                <div class="row">
                        <button type="submit" class="button btn-primary mr10 pull-right">Login</button>
                </div>
            </div>
            <!-- end .form-footer section -->
        <?php $this->endWidget(); ?>
    </div>
</div>