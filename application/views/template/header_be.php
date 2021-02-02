<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Pilkades Banten</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">
<script src="<?=base_url();?>assets/jquery/jquery-3.5.1.js"></script>
    

    <!-- Bootstrap core CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/starter-template.css'); ?>" rel="stylesheet">
    <script type="text/javascript">

  $(document).ready(function () 
  {
    getDataChar();
  });

  function getDataChar()
  {
    $.ajax(
    {
      type: "POST",
      url: "<?=base_url();?>Pages/dataChart",
      data: "data",
      dataType: "json",
      success: function (response) 
      {
        console.log(response);
        chart(response);
      }
  });
  }

  function chart(response) { 
    var chart = new CanvasJS.Chart("chartContainer", {
  theme: "light1", // "light2", "dark1", "dark2"
  animationEnabled: false, // change to true    
  title:{
    // text: "Tes Chart "
  },
  data: [
  {
    /*Change type to "bar", "area", "spline", "pie",etc.*/
    type: "column",

    dataPoints:response
    
    // dataPoints: a
    

  }
  ]
});
chart.render();
   }
</script>
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('Pages'); ?>">Beranda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Pages/perhitungan_suara'); ?>">Perhitungan Suara</a>
        </li>
        <!-- <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="#">Menu2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Menu4</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
