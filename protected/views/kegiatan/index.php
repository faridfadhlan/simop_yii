<section id="content_wrapper">
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="dashboard.html">Daftar Kegiatan</a>
                </li>
                <li class="crumb-icon">
                    <a href="dashboard.html">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li class="crumb-link"><a href="#">Home</a></li>
                <li class="crumb-link"><a href="#">Pekerjaan</a></li>
                <li class="crumb-trail">Daftar Kegiatan</li>
            </ol>
        </div>
    </header>
    <!-- End: Topbar -->

    <!-- Start: Topbar -->
    <header id="topbar" class="ph10">
        <div class="topbar-left">
            <ul class="nav nav-list nav-list-topbar pull-left">
                <li class="active">
                    <a href="ecommerce_dashboard.html">Semua Kegiatan</a>
                </li>
            </ul>
        </div>
        <div class="topbar-right">
            <?php echo CHtml::link('<span class="fa fa-plus pr5"></span> Tambah Kegiatan', array("kegiatan/create"), array("class"=>"btn btn-default btn-sm light fw600 ml10"));?>
            <?php echo CHtml::link('<span class="fa fa-plus pr5"></span> Tambah Pekerjaan', array("pekerjaan/create"), array("class"=>"btn btn-default btn-sm light fw600 ml10"));?>
        </div>
    </header>
    <section class="table-layout animated fadeIn">
        <div class="tray tray-center p25 va-t posr">
            <div class="panel">
            <div id="mygantt" style='width:100%;height:460px'></div>
            </div>
        </div>
    </section>
</section>
<?php
$cs=Yii::app()->getClientScript();
$cs->scriptMap=array('jquery.js'=>false);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/public/plugins/dhtmlxgantt/dhtmlxgantt.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/public/plugins/dhtmlxgantt/ext/dhtmlxgantt_tooltip.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->createUrl("kegiatan/datagantt"),CClientScript::POS_END);
$cs->registerCssFile(Yii::app()->request->baseUrl.'/public/plugins/dhtmlxgantt/dhtmlxgantt.css');
$cs->registerScript("asas", '
    gantt.config.readonly = true;
            gantt.config.columns =  [
                {name:"text",       label:"Kegiatan / Pekerjaan",  tree:true, width: "300"},
                {name:"progress",   label:"Progres",   align: "center" },
                {name:"duration",   label:"Durasi",   align: "center" }
            ];
            gantt.config.scale_unit = "week"; 
            gantt.init("mygantt");
            gantt.parse(demo_tasks);
');
?>