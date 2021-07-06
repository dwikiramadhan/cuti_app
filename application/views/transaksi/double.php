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
                        <h2>Transaksi dengan VA Double<small>Basic example without any additional modification classes</small></h2>
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
                        <br>
                        <a href="<?php echo base_url(); ?>transaksi/solved" class="btn btn-sm btn-success" title="">Data Solved!</a>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="table" class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Action</th>
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
                                    $no = 1;
                                    foreach ($record as $key) {
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td>
                                                <a href='#' class='btn btn-warning btn-edit' data-id='<?= $key->id_transaksi ?>' data-va='<?= $key->va ?>' data-nama='<?= $key->nama ?>'><i class="fa fa-cog"></i></a>
                                            </td>
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
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal -->
                        <form action="<?php echo base_url('transaksi/issue_transaksi_double') ?>" method="post">
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Take action</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" id="id_transaksi" name="id_transaksi">
                                            <div class="form-group row">
                                                <p class="col-sm-12">VA: <strong><span id="va_info"></span></strong></p>
                                                <p class="col-sm-12">Nama: <strong><span id="nama"></span></strong></p>
                                            </div>
                                            <div class="form-group row">
                                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan:</label>
                                                <input type="text" class="form-control col-sm-8" name="keterangan" id="keterangan" value="VA Double" readonly>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        // get Edit Product
        $('.btn-edit').on('click', function() {
            // get data from button edit
            const id_transaksi = $(this).data('id');
            const va = $(this).data('va');
            const nama = $(this).data('nama');
            $('#id_transaksi').val(id_transaksi);
            $('#va_info').text(va);
            $('#nama').text(nama);
            $('#exampleModalCenter').modal('show');
        });
    });
</script>