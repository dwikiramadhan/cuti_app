<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Record Cuti</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <?php echo $this->session->flashdata('message'); ?>
                            <table id="table" class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pekerja</th>
                                        <th>Tanggal Cuti</th>
                                        <th>Keterangan</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($record as $key) {
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $key->nama_pekerja ?></td>
                                            <td><?= $key->tgl_cuti ?></td>
                                            <td><?= $key->keterangan ?></td>
                                            <td><a class="btn btn-primary" href="<?php echo base_url(); ?>cuti/detail/<?=$key->id?>"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                    <?php
                                        $no++;
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