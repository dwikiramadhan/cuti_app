<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Create cuti</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <form action="<?php echo base_url(); ?>employee/simpan_cuti" method="post">
                            <input type="hidden" name="id_pekerja" value="<?= $record[0]->id ?>">
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
                                    <input type="text" class="form-control" name="mulai" id="mulai" value="<?= date('m-Y', strtotime($record[0]->tmt_gol_upah)) ?>" readonly>
                                </div>
                                <div class="form-group col">
                                    <label class="col-form-label">Lama Bekerja</label>
                                    <input type="text" class="form-control" name="lama_bekerja" id="lama_bekerja" value="<?= $lama_bekerja ?>" readonly>
                                </div>
                                <div class="form-group col">
                                    <label class="col-form-label">Jlh cuti didapat</label>
                                    <input type="text" class="form-control" name="jatah_cuti" id="jatah_cuti" value="<?= $jlh_cuti ?>" readonly>
                                </div>
                                <div class="form-group col">
                                    <label class="col-form-label">Sisa cuti</label>
                                    <input type="text" class="form-control" name="lama_bekerja" id="lama_bekerja" value="<?= $sisa_cuti ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="tgl_cuti" class="col-form-label">Tanggal cuti</label>
                                    <input type="date" class="form-control" name="tgl_cuti" id="tgl_cuti">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="keterangan" class="col-form-label">Keterangan</label>
                                    <textarea type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan keterangan disini..."></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>