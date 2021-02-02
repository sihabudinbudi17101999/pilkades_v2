<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/arc/sign-in/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/arc/sign-in/signin.css');?>" rel="stylesheet">
    <style>

      #a{
        border-radius: 30px;
        margin-top: 4px;
        color: black;
      }
      #b{
        border-radius: 30px;
        margin-top: 4px;
        margin-bottom: 1px;
        color: black;
      }
      #c{
        border-radius: 30px;
        margin-top: 30px;
        color: black;
        

      }
      .form-signin{
        background: skyblue;
        border-radius: 30px;
      }
    </style>
  </head>

  <body class="text-center"  style="background-image: url('assets/img/logo2.jpg');">


     <?php echo form_open('Auth/saves_ad','class="form-signin"');?>
     <!-- <img class="mb-4" src="<?php //echo base_url('assets/arc/img/7.jpg'); ?>" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal"><img style="border-radius: 100px;" src="<?php echo base_url('assets/img/logoibijo.jpg') ?>" width="100" height="100"></h1>
      <!-- <div class="lg">
        <?php 
          // if (isset($_GET['nama_siswa'])) {
            // if ($_GET['nama_siswa'] == "") {
              // echo $this->session->flashdata('pesan');
            ///}
          //}
         ?>
      </div>
      <?php //echo $this->session->flashdata('pesan'); ?> -->

      
        <label for="inputusername" class="sr-only">username address</label>
                      <input id="a" type="text" name="username" class="form-control form-control-user"  placeholder="username..." autofocus>
                      <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
                      <input id="b" type="password" name="password1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password..." autofocus>
                      <?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                      <input id="b" type="password" name="password2" class="form-control form-control-user" id="exampleInputPassword" placeholder="Ulangi Password..." autofocus>
                      <?= form_error('password2','<small class="text-danger pl-3">','</small>'); ?>
                    
        <button  id="c" class="btn btn-lg btn-primary btn-block" type="submit">Registrasi</button> <br>
        <a style="color: black;" class="small" href="<?php echo base_url('Auth'); ?>">Sudah Punya Akun?</a>
      <p class="mt-5 mb-3 text-muted"><b style="color: black;">PILKADES &copy; <?php echo date('Y'); ?></b></p>
        
        
                    

    <?php echo form_close(); ?>

  </body>
</html>
