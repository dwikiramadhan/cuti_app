<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="index.html"><img src="<?php echo base_url(); ?>assets/images/icon-light.svg" alt="HexaBit Logo" class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
            <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
        </div>

        <div class="navbar-right">

            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url('dashboard/destroy'); ?>" class="icon-menu"><i class="icon-power"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div id="rightbar" class="rightbar">
    <ul class="nav nav-tabs-new">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Settings</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Choose Theme</h6>
                    <ul class="choose-skin list-unstyled mb-0">
                        <li data-theme="purple">
                            <div class="purple"></div>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                        </li>
                        <li data-theme="orange" class="active">
                            <div class="orange"></div>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled mb-0">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Report Panel Usag</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Email Redirect</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Notifications</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Auto Updates</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Account Settings</h6>
                    <ul class="setting-list list-unstyled mb-0">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Location Permission</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Notifications</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane right_chat" id="chat">
            <div class="slim_scroll">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <div class="card">
                    <h6>Recent</h6>
                    <ul class="right_chat list-unstyled mb-0">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="<?php echo base_url(); ?>assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Ava Alexander <small class="float-right">Just
                                                now</small></span>
                                        <span class="message">Lorem ipsum Veniam aliquip culpa laboris minim
                                            tempor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="<?php echo base_url(); ?>assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Debra Stewart <small class="float-right">38min
                                                ago</small></span>
                                        <span class="message">Many desktop publishing packages and web page
                                            editors</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="<?php echo base_url(); ?>assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Susie Willis <small class="float-right">2hr
                                                ago</small></span>
                                        <span class="message">Contrary to belief, Lorem Ipsum is not simply
                                            random text</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="<?php echo base_url(); ?>assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Folisise Chosielie <small class="float-right">2hr
                                                ago</small></span>
                                        <span class="message">There are many of passages of available, but the
                                            majority</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="<?php echo base_url(); ?>assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Marshall Nichols <small class="float-right">1day
                                                ago</small></span>
                                        <span class="message">It is a long fact that a reader will be
                                            distracted</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="left-sidebar" class="sidebar">
    <?php
    $uri = $this->uri->segment(1);
    ?>
    <div class="navbar-brand">
        <a href="index.html"><img src="<?php echo base_url(); ?>assets/images/icon-dark.svg" alt="HexaBit Logo" class="img-fluid logo"><span>Employee S2</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="<?php echo base_url(); ?>assets/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>User</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <!-- <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li> -->
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="#" class="btn-ubah-password"><i class="icon-settings"></i>Ubah password</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= base_url('dashboard/destroy'); ?>"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="<?= $uri == 'dashboard' ? 'active' : '' ?>"><a href="<?php echo base_url(); ?>dashboard"><i class="icon-home"></i><span>Dashboard</span></a></li>
                <li class="<?= $uri == 'employee' ? 'active' : '' ?>"><a href="<?php echo base_url(); ?>employee"><i class="icon-diamond"></i><span>Master Pekerja</span></a></li>
            </ul>
        </nav>
    </div>
</div>