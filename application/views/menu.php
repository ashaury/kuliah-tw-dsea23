<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" >
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Teknologi Web</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home/features') ?>">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home/pricing') ?>">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('country/daftarnegara') ?>">Country</a>
      </li>
    </ul>
  </div>
</nav>
<h1><?php echo $title; ?></h1>
</body>
</html>