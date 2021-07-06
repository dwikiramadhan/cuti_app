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
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <form action="<?php echo base_url('dashboard/upload') ?>" method="POST" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="col-12">
                    <div class="card">
                        <div class="header">
                            <h2>Selamat datang.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>