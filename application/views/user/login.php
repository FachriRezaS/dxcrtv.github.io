<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="<?= base_url('image/favicon2.ico')  ?>" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/login.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <?php if (validation_errors()): ?>
          <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
          </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error_login')): ?>
          <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error_login'); ?>
          </div>
        <?php endif; ?>
      <div class="row">        
        <div class="col-md-4">
          
        </div>

        <div class="col-md-4 form-login">
          <h1 class="text-center">Welcome</h1>

          <?php echo form_open(); ?>
            <div class="form-group">
              <input type="email" name="email" placeholder="Email" class="form-control">
            </div>  

            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div> 

            <div class="form-group">
              <input type="submit" name="login" class="form-control btn btn-primary" value="Log in">
            </div>
            
            <?php echo form_close(); ?> 
            <small class="goto">as Admin haven't had account?</small><a href="<?php echo site_url('user/registernew') ?>">Register here &raquo;</a>
        </div>
        
        <div class="col-md-4">
            
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
  </body>
</html>