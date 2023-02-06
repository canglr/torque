<?php /* Smarty version 2.6.33, created on 2023-02-06 08:52:07
         compiled from layout/header.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $this->_tpl_vars['title']; ?>
</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
        
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?php echo $_SESSION['user']->name; ?>
 <?php echo $_SESSION['user']->surname; ?>
</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="/account/info" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Hesap Bilgileri
              </a>
              <a href="#" class="dropdown-item has-icon" data-toggle="modal" data-target="#modal-5">
                <i class="fas fa-unlock-alt"></i> Şifre Değiştir
              </a>
              <div class="dropdown-divider"></div>
              <a href="/account/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Çıkış Yap
              </a>
            </div>
          </li>
        </ul>
      </nav>
            <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Torque</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
           
            <li><a class="nav-link" href="/account/dashboard"><i class="far fa-fire"></i> <span>Ana Sayfa</span></a></li>
            
            
            <li><a class="nav-link" href="/account/users"><i class="far fa-users"></i> <span>Kullanıcılar</span></a></li>
         
          </aside>
      </div>

      
            <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo $this->_tpl_vars['title']; ?>
</h1>
          </div>

          <div class="section-body">