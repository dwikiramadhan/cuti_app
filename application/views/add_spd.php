<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Create SPD</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <form action="<?php echo base_url(); ?>spd/save_spd" method="post">
                            <input type="hidden" name="id_pekerja" id="id_pekerja" value="<?= $record[0]->id ?>">
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="col-form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $record[0]->nama_pekerja ?>" readonly>
                                </div>
                                <div class="form-group col">
                                    <label class="col-form-label">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $record[0]->nama_jabatan ?>" readonly>
                                </div>
                                <div class="form-group col">
                                    <label class="col-form-label">Golongan</label>
                                    <input type="text" class="form-control" name="gol_upah" id="gol_upah" value="<?= $record[0]->gol_upah ?>" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="col-form-label">Tanggal Perjalanan</label>
                                    <input type="date" class="form-control" name="tgl_perjalanan" id="tgl_perjalanan" >
                                </div>
                                <div class="form-group col">
                                    <label class="col-form-label">Apakah Jabodetabek ?</label>
                                    <select name="is_jabodetabek" id="is_jabodetabek" class="form-control">
                                        <option value="">-- Pilih --</option>
                                        <option value="Jabodetabek">Jabodetabek</option>
                                        <option value="Non Jabodetabek">Non Jabodetabek</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label class="col-form-label">Jenis Transport</label>
                                    <select name="jenis_transport" id="jenis_transport" class="form-control">
                                        <option value="">-- Pilih --</option>
                                        <option value="transport_bandara">Transport Bandara</option>
                                        <option value="transport_non_bandara">Transport Non Bandara</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label class="col-form-label">Destinasi</label>
                                    <select name="destinasi" id="destinasi" class="form-control"></select>
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
                                    <tbody id="bodyTable">

                                    </tbody>
                                </table>
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
                    $('.table_row').remove();
                    $.each(data.reverse(), function(i, item) {
                        $bodyTable.after('<tr class="table_row"><td>' + item.item + '</td><td>' + item.nominal + '</td></tr>')
                    })

                    console.log(data);
                }
            })
            // $('#destinasi').load(url);
            // return true;
        })
    });
</script>