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
    <link href="<?php echo base_url();?>assets/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>assets/css/dataTables/dataTables.responsive.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/login.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="col-md-6 col-md-offset-3">
        <div class="login-container">
            <h1 align="center">Point of Sales Retail</h1>
            <h4 align="center">&copy; Retail Maju Sejahtera</h4>
            <div class="login-box">
                <div class="header">
                    <h4 class="blue"><i class="fa fa-coffee fa-fw"></i>Silahkan Masukkan Akun Anda</h4>                    
                </div>
                <form method="post" action="<?php echo base_url(); ?>">
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" placeholder="username" name="username" aria-describedby="basic-addon1" autofocus/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" placeholder="password" name="password" aria-describedby="basic-addon1" autofocus/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="submit" value="Login" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="footer-login">
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/js/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/startmin.js"></script>

</body>
</html>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
        });
    });
</script>