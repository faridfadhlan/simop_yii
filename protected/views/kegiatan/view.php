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
                <?php echo CHtml::link('<span class="fa fa-pencil pr5"></span> Edit Kegiatan </a>', array("kegiatan/view", "id"=>$kegiatan->id), array("class"=>"btn btn-default btn-sm light fw600 ml10"));?>
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
                        <span class="panel-title"><?php echo strtoupper($kegiatan->nama.' '.jenis_waktu_to_kegiatan($kegiatan->jenisWaktu->jenis_waktu, $kegiatan->nilai_waktu).' Tahun '.$kegiatan->tahun);?></span>
                    </div>
                    <div class="panel-body pb5">
                        <h4>Nama Kegiatan</h4>
                        <p class="text-muted"><?php echo $kegiatan->nama;?> </p>

                        <hr class="short br-lighter">

                        <h4>Tahun Kegiatan</h4>
                        <p class="text-muted"> <?php echo $kegiatan->tahun;?> </p>

                        <hr class="short br-lighter">


                        <h4>Daftar Pekerjaan</h4>
                        <table class="table">
                            <thead>
                                <tr class="primary">
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Pekerjaan</th>
                                    <th class="text-center">Satuan</th>
                                    <th class="text-center">Target</th>
                                    <th class="text-center">Realisasi</th>
                                    <th class="text-center">Progres</th>
                                    <th class="text-center">Jumlah Petugas</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; ?>
                                <?php foreach($kegiatan->pekerjaans as $pekerjaan):?>
                                <?php $no++; ?>
                                <tr>
                                    <td class="text-center"><?php echo $no;?></td>
                                    <td><?php echo CHtml::link($pekerjaan->nama, array("pekerjaan/view", "id"=>$pekerjaan->id));?></td>
                                    <td class="text-center"><?php echo $pekerjaan->unitTarget->nama;?></td>
                                    <td class="text-center"><?php echo $pekerjaan->jumlah_target;?></td>
                                    <td class="text-center"><?php echo $pekerjaan->jumlah_target;?></td>
                                    <td class="text-center">50%</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">
                                        <a href="#"><span class="glyphicons glyphicons-edit"></span></a>
                                        <a href="#"><span class="fa fa-comment-o"></span></a>

                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>

                        <hr class="short br-lighter">

                        <h4>Pelaku Kegiatan</h4>
                        <p class="text-muted pb10"> Bidang Distribusi, Bidang IPDS
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>