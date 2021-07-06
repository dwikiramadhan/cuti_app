<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Jquery Datatable</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Table</li>
                    <li class="breadcrumb-item active">Jquery Datatable</li>
                </ul>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>VA Transaksi not match ke VA CMS (Credit) <small>Data yang ditampilkan adalah di Transaksi ada, tetapi di CMS tidak ada</small></h2>
                        <ul class="header-dropdown dropdown dropdown-animated scale-left">
                            <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tgl Transaksi</th>
                                        <th>VA</th>
                                        <th>Nama</th>
                                        <th>Jam Kirim</th>
                                        <th>Jenis SIM</th>
                                        <th>Pelimpahan</th>
                                        <th>CMS BNI</th>
                                        <th>Status Pengiriman</th>
                                        <th>Pengiriman</th>
                                        <th>Biaya Pengiriman</th>
                                        <th>Biaya Paket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($record as $key) {
                                    ?>
                                        <tr>
                                            <td><i class="fa fa-close text-danger"></i></td>
                                            <td><?= $key->tgl_transaksi ?></td>
                                            <td><?= $key->va ?></td>
                                            <td><?= $key->nama ?></td>
                                            <td><?= $key->jam_kirim ?></td>
                                            <td><?= $key->jenis_sim ?></td>
                                            <td><?= $key->pelimpahan ?></td>
                                            <td><?= $key->cms_bni ?></td>
                                            <td><?= $key->status_pengiriman ?></td>
                                            <td><?= $key->pengiriman ?></td>
                                            <td><?= $key->biaya_pengiriman ?></td>
                                            <td><?= $key->biaya_paket ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>