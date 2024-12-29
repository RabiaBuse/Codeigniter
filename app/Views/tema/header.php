<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanatEvi</title>

    <link rel="shortcut icon" type="image" href="<?=base_url()?>assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/panel.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link href="https://fonts.googleapis.com/css2?family=Georgia:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
        <div class="other-links">
            <button id="btn-login"><a href="<?=base_url('login')?>">Panel</a></button>
            <button id="btn-signup"><a href="<?= base_url('signup') ?>">Üye Ol</a></button>

            <i class="fa-solid fa-user"></i>
            <a href="<?= base_url('/cart_view') ?>">
    <i class="fa-solid fa-cart-shopping"></i>
    <span class="badge badge-pill badge-primary">0</span>
</a>


        </div>
    </div>
    
    <!-- top navbar -->

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="assets/image/logoo.png" alt="" width="180px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=base_url('anasayfa')?>">Anasayfa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('urunlerimiz') ?>">Ürünler</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Kategori
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #2D3436;">
                      <li><a class="dropdown-item" href="<?= base_url('hirka') ?>">Hırka</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('bebek') ?>">Bebek</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('bere_eldiven') ?>">Bere & Eldiven</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('oyuncak') ?>">Oyuncak</a></li>
                      <li><a class="dropdown-item" href="<?= base_url('dekorasyon') ?>">Ev & Dekorasyon</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('hakkimizda') ?>">Hakkımızda</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('iletisim') ?>">Bize Ulaşın</a>
                  </li>
                </ul>
               
                <form class="d-flex">
                  <input class="form-control me-2" type="ara" placeholder="Ara" aria-label="Ara">
                  <button class="btn btn-outline-success" type="submit" id="search-btn">Ara</button>
                </form>
              </div>
            </div>
          </nav>
        <!-- navbar -->
