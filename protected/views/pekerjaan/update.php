<section id="content_wrapper">
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="dashboard.html">Dashboard</a>
                </li>
                <li class="crumb-icon">
                    <a href="dashboard.html">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li class="crumb-link">
                    <a href="index.html">Home</a>
                </li>
                <li class="crumb-trail">Dashboard</li>
            </ol>
        </div>
        <div class="topbar-right">

            <div class="topbar-right">
                    <a href="#" class="btn btn-default btn-sm light fw600 ml10"><span class="fa fa-plus pr5"></span> Tambah Kegiatan </a>
                    
                </div>
        </div>
    </header>
    <!-- End: Topbar -->

    <div id="content">
        
        <div class="row">

            <div class="col-md-12">

                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Update Pekerjaan</span>
                    </div>
                    <div class="panel-body">
                        <?php echo CHtml::errorSummary($model,NULL, NULL,array('class'=>'alert alert-danger')); ?>
                        <?php $this->renderPartial('_form', array(
                                        'model'=>$model,
                                        'kegiatans'=>$kegiatans,
                                        'units'=>$units,
                                        'pekerjaans'=>$pekerjaans
                                    )
                                );?>
                    </div>
                </div>


            </div>


        </div>

    </div>
</section>