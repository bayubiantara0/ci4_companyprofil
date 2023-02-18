  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="<?= base_url() ?>/template/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?= base_url() ?>/template/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="<?php echo base_url('admin/dasboard') ?>" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <!-- Berita -->
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>Berita, Profil &amp; Layanan
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?php echo base_url('admin/berita') ?>" class="nav-link">
                                  <i class="fas fa-table nav-icon"></i>
                                  <p>Data Berita/Profil</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url('admin/berita/tambah') ?>" class="nav-link">
                                  <i class="fas fa-plus nav-icon"></i>
                                  <p>Tambah Berita/Profil</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url('admin/kategori') ?>" class="nav-link">
                                  <i class="fas fa-tags nav-icon"></i>
                                  <p>Kategori Berita/Profil</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <!-- Galeri -->
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-image"></i>
                          <p>Galeri &amp; Banner
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="fas fa-table nav-icon"></i>
                                  <p>Data Galeri/Banner</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="fas fa-plus nav-icon"></i>
                                  <p>Tambah Galeri/Banner</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="fas fa-tags nav-icon"></i>
                                  <p>Kategori Galeri/Banner</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <!-- Konfigurasi -->
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-wrench"></i>
                          <p>Setting Website
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?php echo base_url('admin/konfigurasi') ?>" class="nav-link">
                                  <i class="fas fa-tasks nav-icon"></i>
                                  <p>Konfigurasi Umum</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url('admin/konfigurasi/logo') ?>" class="nav-link">
                                  <i class="fas fa-image nav-icon"></i>
                                  <p>Update Logo</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url('admin/konfigurasi/icon') ?>" class="nav-link">
                                  <i class="fas fa-leaf nav-icon"></i>
                                  <p>Update Icon</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url('admin/konfigurasi/seo') ?>" class="nav-link">
                                  <i class="fab fa-google nav-icon"></i>
                                  <p>Setting SEO &amp; Metatext</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <!-- logout -->
                  <li class="nav-item">
                      <a href="<?php echo base_url('login/logout') ?>" class="nav-link">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>Logout</p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0"><?php echo $title ?></h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dasboard') ?>">Home</a></li>
                          <li class="breadcrumb-item active"><?php echo $title ?></li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title"><?php echo $title ?></h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body" style="min-height: 500px;">