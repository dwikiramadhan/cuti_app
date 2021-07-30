<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Rencana Perjalanan</h2>
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
                                        <th>Tanggal Perjalanan</th>
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
                                            <td><?= date('d-m-Y', strtotime($key->tgl_mulai_perjalanan)) ?> s/d <?= date('d-m-Y', strtotime($key->tgl_berakhir_perjalanan)) ?></td>
                                            <td><a class="btn btn-primary" href="<?php echo base_url(); ?>spd/detail/<?=$key->kode?>"><i class="fa fa-eye"></i></a></td>
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