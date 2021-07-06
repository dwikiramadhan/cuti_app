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
                        <h2>Transaksi <small>Basic example without any additional modification classes</small></h2>
                        <br>
                        <form action="<?php echo base_url('transaksi/upload') ?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name="transaksi_file" id="upload_transaksi_file" />
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <br>
                        <a href="<?php echo base_url(); ?>transaksi/double" class="btn btn-sm btn-danger" title="">VA Double</a>
                        <a href="<?php echo base_url(); ?>transaksi/delete_today" class="btn btn-sm btn-warning" title="" onclick="return confirm('Are you sure?')">Hapus semua inputan hari ini</a>
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
                            <table id="table" class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>No</th>
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

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var table;
    $(document).ready(function() {

        //datatables
        table = $('#table').DataTable({

            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('transaksi/get_data_transaksi') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        });

    });
</script>