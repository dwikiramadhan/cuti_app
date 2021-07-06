<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<style>
    .box-upload {
        box-sizing: border-box;
        box-shadow: rgba(49, 53, 59, 0.12) 0px 1px 6px;
        border-radius: 10px;
        background: rgb(255, 255, 255);
        border: 1px dashed rgb(203, 208, 203);
        padding: 5%;
    }

    .icon.jsx-1517492390 {
        background: #f7f8f9;
        padding: 15px;
        border-radius: 50%;
        margin: 30px auto;
        width: 130px;
        height: 130px;
    }
</style>

<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Dashboard</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <form action="<?php echo base_url('dashboard/upload') ?>" method="POST" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="col-12">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <div class="col">
                    <div class="card box-upload">
                        <input id="upload5" type="file" ref="myFiles" name="file5" class="form-control border-0" style="display: none" />
                        <label for="upload5" class="text-center" style="width: 100%; cursor:pointer">
                            <div>
                                <div class="jsx-1517492390 icon">
                                    <div class="jsx-3903387886 img-container">
                                        <img src="https://www.diffchecker.com/static/images/single-excel.png" alt="Image" class="jsx-3903387886">
                                    </div>
                                </div>
                                <h6 id="filename5">Upload file registrasi disini..</h6>
                                <h6>Pastikan yang dimasukkan adalah file REGISTRASI!</h6>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="card box-upload">
                        <input id="upload1" type="file" ref="myFiles" name="file" class="form-control border-0" style="display: none" />
                        <label for="upload1" class="text-center" style="width: 100%; cursor:pointer">
                            <div>
                                <div class="jsx-1517492390 icon">
                                    <div class="jsx-3903387886 img-container">
                                        <img src="https://www.diffchecker.com/static/images/single-excel.png" alt="Image" class="jsx-3903387886">
                                    </div>
                                </div>
                                <h6 id="filename1">Upload file transaksi disini..</h6>
                                <h6>Pastikan yang dimasukkan adalah file TRANSAKSI!</h6>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="card box-upload">
                        <input id="upload2" type="file" ref="myFiles" name="file1" class="form-control border-0" style="display: none" />
                        <label for="upload2" class="text-center" style="width: 100%; cursor:pointer">
                            <div>
                                <div class="jsx-1517492390 icon">
                                    <div class="jsx-3903387886 img-container">
                                        <img src="https://www.diffchecker.com/static/images/single-excel.png" alt="Image" class="jsx-3903387886">
                                    </div>
                                </div>
                                <h6 id="filename2">Upload file produksi disini..</h6>
                                <h6>Pastikan yang dimasukkan adalah file PRODUKSI!</h6>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="card box-upload">
                        <input id="upload3" type="file" ref="myFiles" name="file2" class="form-control border-0" style="display: none" />
                        <label for="upload3" class="text-center" style="width: 100%; cursor:pointer">
                            <div>
                                <div class="jsx-1517492390 icon">
                                    <div class="jsx-3903387886 img-container">
                                        <img src="https://www.diffchecker.com/static/images/single-excel.png" alt="Image" class="jsx-3903387886">
                                    </div>
                                </div>
                                <h6 id="filename3">Upload file pengembalian disini..</h6>
                                <h6>Pastikan yang dimasukkan adalah file PENGEMBALIAN!</h6>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="card box-upload">
                        <input id="upload4" type="file" ref="myFiles" name="file3" class="form-control border-0" style="display: none" />
                        <label for="upload4" class="text-center" style="width: 100%; cursor:pointer">
                            <div>
                                <div class="jsx-1517492390 icon">
                                    <div class="jsx-3903387886 img-container">
                                        <img src="https://www.diffchecker.com/static/images/single-excel.png" alt="Image" class="jsx-3903387886">
                                    </div>
                                </div>
                                <h6 id="filename4">Upload file pelimpahan disini..</h6>
                                <h6>Pastikan yang dimasukkan adalah file PELIMPAHAN!</h6>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="col-1">
                    <button id="btn-find" type="submit" class="btn btn-primary" style="height: 308px;">
                        Process <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 pt-3 text-center">
                            <button id="btn-find" type="submit" class="btn btn-primary">Find difference</button>
                        </div> -->
                        <div class="row">
                            <div class="col-lg col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Registrasi</h6>
                                    <h3 class="text-success"><?= $registrasi[0]->jlh_data ?></h3>
                                    <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="87"></div>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                            </div>
                            <div class="col-lg col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Transaksi</h6>
                                    <h3 class="text-success"><?= $transaksi[0]->jlh_data ?></h3>
                                    <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="87"></div>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                            </div>
                            <div class="col-lg col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Produksi</h6>
                                    <h3 class="text-primary"><?= $produksi[0]->jlh_data ?></h3>
                                    <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="87"></div>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                            </div>
                            <div class="col-lg col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Pengembalian</h6>
                                    <h3 class="text-primary"><?= $pengembalian[0]->jlh_data ?></h3>
                                    <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="87"></div>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                            </div>
                            <div class="col-lg col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Waiting List</h6>
                                    <h3 class="text-warning"><?= $transaksi[0]->jlh_data - ($produksi[0]->jlh_data + $pengembalian[0]->jlh_data) ?></h3>
                                    <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="87"></div>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                            </div>
                            <div class="col-lg col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Pelimpahan</h6>
                                    <h3 class="text-primary"><?= $pelimpahan[0]->jlh_data ?></h3>
                                    <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="87"></div>
                                    </div>
                                    <small class="text-muted">19% compared to last week</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 pt-3 text-center">
                            <button id="btn-find" type="submit" class="btn btn-primary">Find difference</button>
                        </div> -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Compare VA Credit (CMS) - VA Registrasi</h6>
                                    <div class="row">
                                        <div class="col-4">
                                            <small class="text-success">Matched!</small>
                                            <h3 class="text-success"><?= $jlh_compare_cms_registrasi[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>cms/cmsmatchtoregistrasi" class="badge badge-primary" style="margin: 0;">Details</a>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-danger">Not Matched!</small>
                                            <h3 class="text-danger"><?= $registrasi[0]->jlh_data - $jlh_compare_cms_registrasi[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>registrasi/registrasinotmatchcms" class="badge badge-primary" style="margin: 0;">Details</a>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-warning">-</small>
                                            <h3 class="text-danger"><?= $jlh_compare_cms_registrasi_fail[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>cms/cmsnotmatchregistrasi" class="badge badge-primary" style="margin: 0;">Details</a>
                                            <!-- <small class="text-muted">19% compared to last week</small> -->
                                        </div>
                                        <div class="col-12">
                                            <a href="<?php echo base_url(); ?>cms/cmsnotmatchregistrasi" class="btn btn-primary btn-sm btn-block">Update</a>
                                            <!-- <small class="text-muted">19% compared to last week</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Compare VA Credit (CMS) - VA Transaksi</h6>
                                    <div class="row">
                                        <div class="col">
                                            <small class="text-success">Matched!</small>
                                            <h3 class="text-success"><?= $jlh_compare_cms_transaksi[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>cms/cmsmatchtotransaksi" class="badge badge-primary" style="margin: 0;">Details</a>
                                        </div>
                                        <div class="col">
                                            <small class="text-danger">Not Matched!</small>
                                            <h3 class="text-danger"><?= $transaksi[0]->jlh_data - $jlh_compare_cms_transaksi[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>transaksi/transaksinotmatchcmsagain" class="badge badge-primary" style="margin: 0;">Details</a>
                                        </div>
                                        <div class="col">
                                            <small class="text-danger">-</small>
                                            <h3 class="text-danger"><?= $jlh_compare_cms_transaksi_fail[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>cms/cmsnotmatch" class="badge badge-primary" style="margin: 0;">Details</a>
                                            <!-- <small class="text-muted">19% compared to last week</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Compare VA Debit (CMS) - VA Produksi</h6>
                                    <div class="row">
                                        <div class="col">
                                            <small class="text-success">Matched!</small>
                                            <h3 class="text-success"><?= $jlh_compare_cms_produksi_debit[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>cms/cmsmatchtoproduksi" class="badge badge-primary" style="margin: 0;">Details</a>
                                        </div>
                                        <div class="col">
                                            <small class="text-danger">Not Matched!</small>
                                            <h3 class="text-danger"><?= $produksi[0]->jlh_data - $jlh_compare_cms_produksi_debit[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>produksi/produksinotmatchcms" class="badge badge-primary" style="margin: 0;">Details</a>
                                            <!-- <small class="text-muted">19% compared to last week</small> -->
                                        </div>
                                        <div class="col">
                                            <small class="text-danger">-</small>
                                            <h3 class="text-danger"><?= $jlh_compare_cms_produksi_debit_fail[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>cms/cmsproduksinotmatch" class="badge badge-primary" style="margin: 0;">Details</a>
                                            <!-- <small class="text-muted">19% compared to last week</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Compare VA Debit (CMS) - VA Pelimpahan</h6>
                                    <div class="row">
                                        <div class="col">
                                            <small class="text-success">Matched!</small>
                                            <h3 class="text-success"><?= $jlh_compare_cms_pelimpahan_debit[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>cms/cmsmatchtopelimpahan" class="badge badge-primary" style="margin: 0;">Details</a>
                                        </div>
                                        <div class="col">
                                            <small class="text-danger">Not Matched!</small>
                                            <h3 class="text-danger"><?= $pelimpahan[0]->jlh_data - $jlh_compare_cms_pelimpahan_debit[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>pelimpahan/pelimpahannotmatchcms" class="badge badge-primary" style="margin: 0;">Details</a>
                                            <!-- <small class="text-muted">19% compared to last week</small> -->
                                        </div>
                                        <div class="col">
                                            <small class="text-danger">-</small>
                                            <h3 class="text-danger"><?= $jlh_compare_cms_pelimpahan_debit_fail[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>cms/cmspelimpahannotmatch" class="badge badge-primary" style="margin: 0;">Details</a>
                                            <!-- <small class="text-muted">19% compared to last week</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Compare VA Debit (CMS) - VA Pengembalian</h6>
                                    <div class="row">
                                        <div class="col">
                                            <small class="text-success">Matched!</small>
                                            <h3 class="text-success"><?= $jlh_compare_cms_pengembalian_debit[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>cms/cmsmatchtopengembalian" class="badge badge-primary" style="margin: 0;">Details</a>
                                        </div>
                                        <div class="col">
                                            <small class="text-danger">Not Matched!</small>
                                            <h3 class="text-danger"><?= $pengembalian[0]->jlh_data - $jlh_compare_cms_pengembalian_debit[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>pengembalian/pengembaliannotmatchcms" class="badge badge-primary" style="margin: 0;">Details</a>
                                            <!-- <small class="text-muted">19% compared to last week</small> -->
                                        </div>
                                        <div class="col">
                                            <small class="text-danger">-</small>
                                            <h3 class="text-danger"><?= $jlh_compare_cms_pengembalian_debit_fail[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>cms/cmspengembaliannotmatch" class="badge badge-primary" style="margin: 0;">Details</a>
                                            <!-- <small class="text-muted">19% compared to last week</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <h6 class="text-muted">Tidak ada VA, Debit (CMS)</h6>
                                    <div class="row">
                                        <div class="col">
                                            <!-- <small class="text-success">Matched!</small> -->
                                            <h3 class="text-warning"><?= $jlh_cms_non_va_debit[0]->jlh_data ?></h3>
                                            <a href="<?php echo base_url(); ?>cms/cmsnonvadebit" class="badge badge-primary" style="margin: 0;">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        var registrasi_file = ''
        var file1 = ''
        var file2 = ''
        var file3 = ''
        var file4 = ''
        var file5 = ''

        let readURL1 = function(input) {
            if (input.files) {
                let filesAmount = input.files.length;
                for (let i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        file1 += input.files[i].name
                        document.getElementById("filename1").innerHTML = input.files[i].name;
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        let readURL2 = function(input) {
            if (input.files) {
                let filesAmount = input.files.length;
                for (let i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        file2 += input.files[i].name
                        document.getElementById("filename2").innerHTML = input.files[i].name;
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        let readURL3 = function(input) {
            if (input.files) {
                let filesAmount = input.files.length;
                for (let i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        file2 += input.files[i].name
                        document.getElementById("filename3").innerHTML = input.files[i].name;
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        let readURL4 = function(input) {
            if (input.files) {
                let filesAmount = input.files.length;
                for (let i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        file2 += input.files[i].name
                        document.getElementById("filename4").innerHTML = input.files[i].name;
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        let readURL5 = function(input) {
            if (input.files) {
                let filesAmount = input.files.length;
                for (let i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        file2 += input.files[i].name
                        document.getElementById("filename5").innerHTML = input.files[i].name;
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        $(function() {
            $('#upload1').on('change', function() {
                readURL1(this)
            });
        });

        $(function() {
            $('#upload2').on('change', function() {
                readURL2(this)
            });
        });

        $(function() {
            $('#upload3').on('change', function() {
                readURL3(this)
            });
        });

        $(function() {
            $('#upload4').on('change', function() {
                readURL4(this)
            });
        });

        $(function() {
            $('#upload5').on('change', function() {
                readURL5(this)
            });
        });

    })

    // $(document).ready(function() {
    //     if (file1 == '' || file2 == '') {
    //         $("#btn-find").prop('disabled', true);
    //     }
    // })
</script>