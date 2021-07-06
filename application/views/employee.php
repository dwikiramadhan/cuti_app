<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Master Pekerja</h2>
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
                                        <th>Aksi</th>
                                        <th>Nama</th>
                                        <th>Fungsi</th>
                                        <th>Nama Jabatan</th>
                                        <th>Bagian</th>
                                        <th>Mulai</th>
                                        <th>Lama Bekerja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($record as $key) {
                                        $thn_mulai = $key->tmt_gol_upah != NULL ? date('m-Y', strtotime($key->tmt_gol_upah)) : '';
                                        if ($key->tmt_gol_upah != NULL) {
                                            $tgl_awal = new DateTime($key->tmt_gol_upah);
                                            $tgl_now = new DateTime('today');
                                            $lama_bekerja = $tgl_now->diff($tgl_awal)->y;
                                            $mod = (int)$lama_bekerja % 3;
                                        }else{
                                            $lama_bekerja = '';
                                            $mod = '';
                                        }
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><a href="<?php echo base_url(); ?>employee/add_cuti/<?=$key->id?>" class="btn btn-success">Add Cuti</a></td>
                                            <td><?= $key->nama_pekerja ?>, <?= $key->gelar ?></td>
                                            <td><?= $key->fungsi ?></td>
                                            <td><?= $key->nama_jabatan ?></td>
                                            <td><?= $key->bagian ?></td>
                                            <td><?= $thn_mulai ?></td>
                                            <td><?= $lama_bekerja ?></td>
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