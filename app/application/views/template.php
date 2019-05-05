<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="<?php echo $title; ?><">
    <meta name="keyword" content="<?php echo $title; ?><">
    <title><?php echo $title; ?></title>
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/admin/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/admin/lib/font-awesome/css/font-awesome.css') ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/admin/css/style.css') ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/admin/css/style-responsive.css') ?>" rel="stylesheet"/>
    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
    <style>
    form label.error{color:red;font-size: 12px;}
    </style>
</head>
<body>
<section id="container">
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <a href="<?= base_url();?>" class="logo"><b>SiS<span>App</span></b></a>
        <!--logo start-->
        <!--<a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>-->
        <!--logo end-->
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li>
                    <a href="<?php echo site_url('user/logout'); ?>" class="logout">Logout </a>
                </li>
            </ul>
        </div>
    </header>
    <?php
    if ($this->session->userdata('user_data') && 'ADMIN' == $this->session->userdata('user_data')['user_type']) {
        $this->load->view('admin/left-nav');
    } else {
        $this->load->view('user/left-nav');
    }

    ?>
    <section id="main-content">
        <section class="wrapper">

            <?php
            $success_msg = $this->session->flashdata('success_msg');
            $error_msg = $this->session->flashdata('error_msg');

            if ($success_msg) {
                ?>
                <div class="alert alert-success">
                    <?php echo $success_msg; ?>
                </div>
                <?php
            } elseif ($error_msg) {
                ?>
                <div class="alert alert-danger">
                    <?php echo $error_msg; ?>
                </div>
                <?php
            }
            ?>
            {content}
        </section>
    </section>
    <!-- footer content -->
    <?php $this->load->view('common/footer'); ?>
    <!-- /footer content -->

</section>

<script type="text/javascript">
    var baseUrl = '<?php echo base_url(); ?>';
</script>
<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/admin/lib/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/lib/bootstrap/js/bootstrap.min.js') ?>"></script>

<script src="<?php echo base_url('assets/admin/lib/jquery.dcjqaccordion.2.7.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/lib/jquery.scrollTo.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/lib/jquery.nicescroll.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/lib/common-scripts.js') ?>"></script>
</body>
</html>