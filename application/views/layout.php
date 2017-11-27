<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>POS RETAIL | <?php echo $title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/css/metisMenu.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="<?php echo base_url() ?>assets/css/dataTables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/dataTables/buttons.bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/startmin.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/table.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- Jquery -->
    <link href="<?php echo base_url();?>assets/autocomplete/jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/autocomplete/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url();?>assets/autocomplete/jquery-ui.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url();?>">Pos Retail Maju Sejahtera <i id="logopos" class="fa fa-home fa-fw"></i></a>
        </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Administratror
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>login"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li><a href="<?php echo base_url();?>dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                    <li><a href="<?php echo base_url();?>barang"><i class="fa fa-cubes fa-fw"></i> Barang</a></li>
                    <li><a href="<?php echo base_url();?>penjualan"><i class="fa fa-shopping-basket fa-fw"></i> Penjualan</a></li>
                    <li><a href="#"><i class="fa fa-th fa-fw"></i>Master Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="<?php echo base_url();?>pemasok"><i class="fa fa-user fa-fw"></i>Pemasok</a></li>
                            <li><a href="<?php echo base_url();?>pengguna"><i class="fa fa-users fa-fw"></i> Pengguna</a></li>
                            <li><a href="<?php echo base_url();?>jenis"><i class="fa fa-list fa-fw"></i>Jenis Barang</a></li>
                            <li><a href="<?php echo base_url();?>satuan"><i class="fa fa-list fa-fw"></i>Satuan Barang</a></li>
                        </ul>
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart fa-fw"></i>Pembelian <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="penerimaan"><i class="fa fa-edit fa-fw"></i>Penerimaan</a></li>
                            <li><a href="pelunasan"><i class="fa fa-files-o fa-fw"></i>Pelunasan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- ... Your content goes here ... -->
            <?php $this->load->view($content); ?>
        </div>
    </div>
</div>

    <!-- jQuery -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/dataTables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables/buttons.bootstrap.min.js" type="text/javascript"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/js/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/startmin.js"></script>

</body>
</html>
