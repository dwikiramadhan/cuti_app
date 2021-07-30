<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<style>
    @media print {

        #left-sidebar {
            display: none !important;
            ;
        }

        #main-content {
            width: 100% !important;
        }
    }
</style>
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Detail cuti</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="col-form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $record[0]->nama_pekerja ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col-form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $record[0]->nama_jabatan ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="col-form-label">Mulai Bekerja</label>
                                <input type="text" class="form-control" name="mulai" id="mulai" value="<?= date('m-Y', strtotime($record[0]->tmt_pwtt)) ?>" readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="tgl_cuti" class="col-form-label">Tanggal cuti</label>
                                <input type="date" class="form-control" name="tgl_cuti" id="tgl_cuti" value="<?= $record[0]->tgl_cuti ?>" readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="keterangan" class="col-form-label">Keterangan</label>
                                <textarea type="text" class="form-control" name="keterangan" id="keterangan" readonly><?= $record[0]->keterangan ?></textarea>
                            </div>
                        </div>
                        <div class="form-group align-right">
                            <button onclick="window.print()" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>