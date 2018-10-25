<?php
    $errorMsg = '<div class="martop"><div class="alert alert-danger martop" role="alert">Sai mật khẩu</div></div>';
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng nhập</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>public/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Page Content -->
    <div class="container main-content">

        <!-- Marketing Icons Section -->
        <div class="row">
            <!--Main bar-->
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default login-panel">
                    <form class="form-horizontal login" action="<?php echo base_url()?>quantri/hethong" method="post">
                      <div class="form-group">
                        <div class="col-md-12">
                            <a href="#" class="thumbnail avatar">
                              <img class="profile-img-card" src="<?php echo base_url()?>public/imgs/admin-logo.jpg" alt="avatar">
                            </a>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <button type="submit" class="signin btn btn-success">Đăng nhập</button>
                            <?php
                                if('Error' == $flag){
                                        echo $errorMsg;
                                    }
                                ?>
                        </div>
                      </div>
                    </form>
                </div><!--End login panel-->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
