<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<style>
    @media print {

        #left-sidebar {
            display: none !important;;
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
                <h2>Detail SPD #<?= $data_spd[0]->kode ?></h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="col-form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $data_spd[0]->nama_pekerja ?>" readonly>
                            </div>
                            <div class="form-group col">
                                <label class="col-form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $data_spd[0]->nama_jabatan ?>" readonly>
                            </div>
                            <div class="form-group col">
                                <label class="col-form-label">Golongan</label>
                                <input type="text" class="form-control" name="gol_upah" id="gol_upah" value="<?= $data_spd[0]->gol_upah ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="col-form-label">Tanggal Mulai Perjalanan</label>
                                <input type="text" class="form-control" name="tgl_mulai_perjalanan" id="tgl_mulai_perjalanan" value="<?= date('d-m-Y', strtotime($data_spd[0]->tgl_mulai_perjalanan)) ?>" readonly>
                            </div>
                            <div class="form-group col">
                                <label class="col-form-label">Tanggal Berakhir Perjalanan</label>
                                <input type="text" class="form-control" name="tgl_berakhir_perjalanan" id="tgl_berakhir_perjalanan" value="<?= date('d-m-Y', strtotime($data_spd[0]->tgl_berakhir_perjalanan)) ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="col-form-label">Apakah Jabodetabek ?</label>
                                <input type="text" class="form-control" value="<?= $data_spd[0]->is_jabodetabek ?>" readonly>
                            </div>
                            <div class="form-group col">
                                <label class="col-form-label">Jenis Transport</label>
                                <input type="text" class="form-control" value="<?= $data_spd[0]->jenis_transport ?>" readonly>
                            </div>
                            <div class="form-group col">
                                <label class="col-form-label">Destinasi</label>
                                <input type="text" class="form-control" value="<?= $data_spd[0]->destinasi ?>" readonly>
                            </div>
                        </div>
                        <div class="table-responsive mt-2">
                            <h4>Rencana perjalanan</h4>
                            <table id="table" class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Item</th>
                                        <th>Nominal</th>
                                    </tr>
                                </thead>
                                <tbody id="bodyTable2">
                                    <?php foreach ($data_spd as $ds) { ?>
                                        <tr>
                                            <td><?= $ds->item ?></td>
                                            <td><?= $ds->nominal ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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

<script>
    $(document).ready(function() {
        var id_tool = 0;
        $("#jenis_transport").change(function() {
            var url = "<?php echo site_url('spd/ajax_sub_spd'); ?>/" + $(this).val();
            $('#destinasi').load(url);
            return true;
        })

        $("#destinasi").change(function() {
            var $bodyTable = $('#bodyTable');
            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('spd/ajax_budget'); ?>",
                data: {
                    id_pekerja: $('#id_pekerja').val(),
                    is_jabodetabek: $('#is_jabodetabek').val(),
                    jenis_transport: $('#jenis_transport').val(),
                    destinasi: $(this).val()
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('.table_row').remove();
                    $.each(data.reverse(), function(i, item) {
                        const valCheck = item.item + ',' + item.nominal;
                        $bodyTable.after('<tr class="table_row"><td><input type="checkbox" name="choose[]" value="' + valCheck + '"></td><td>' + item.item + '</td><td>' + item.nominal + '</td></tr>')
                    })

                    console.log(data);
                }
            })
            // $('#destinasi').load(url);
            // return true;
        })
    });
</script>