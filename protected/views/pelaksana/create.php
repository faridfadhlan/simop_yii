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
                <?php echo CHtml::link('<span class="fa fa-pencil pr5"></span> Edit Pekerjaan </a>', array("pekerjaan/update"), array("class"=>"btn btn-default btn-sm light fw600 ml10"));?>
            </div>
        </div>
    </header>
    <!-- End: Topbar -->

    <div id="content">
        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <span class="panel-icon"><i class="fa fa-pencil"></i>
                        </span>
                        <span class="panel-title">TAMBAH PELAKSANA PEKERJAAN</span>
                    </div>
                    <div class="panel-body pb5">
                        <h4>Nama Pekerjaan</h4>
                        <p class="text-muted"><?php echo $pekerjaan->nama;?></p>

                        <hr class="short br-lighter">
                        <?php echo $this->renderPartial("_form", array("model"=>$model, "bidangs"=>$bidangs));?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>