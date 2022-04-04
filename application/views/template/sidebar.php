<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->

  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="<?php echo base_url('images/') . $this->session->userdata('image') ?>" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block"><?php echo $this->session->userdata('name') ?></a>
    </div>
  </div>
  <img src="<?= base_url('images/'); ?>yayasan.jpg" alt="" style="
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;">


  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview">
        <a href="<?php echo base_url('Dashboard') ?>" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>

      </li>
      <li class="nav-item has-treeview">
        <a href="<?php echo base_url('Siswa/index'); ?>" class="nav-link">
          <i class="nav-icon fas fa-file-alt"></i>
          <p>
            Data Pendaftaran
          </p>
        </a>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-bars"></i>
          <p>
            Data Master
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Data Siswa</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-cog fa-spin"></i>
          <p>
            Setting
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo base_url('Setting') ?>" class="nav-link">
              <i class="fas fa-file-image nav-icon"></i>
              <p>Banner</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa fa-newspaper nav-icon"></i>
              <p>Berita</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa fa-images nav-icon"></i>
              <p>Gallery</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="<?php echo base_url('Auth/showregis'); ?>" class="nav-link">
          <i class="nav-icon fa fa-user-tie"></i>
          <p>
            Data Akun
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="<?php echo base_url('Auth/showregis'); ?>" class="nav-link">
          <i class="nav-icon fa fa-file-alt"></i>
          <p>
            Laporan
          </p>
        </a>
      </li>
      <div class="user-panel mt-2 pb-2 mb-2 d-flex">
      </div>
      <li class="nav-item has-treeview ">
        <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-sm">
          <i class="nav-icon fas fa-power-off"></i>
          <p>
            Logout
          </p>
        </a>
      </li>
    </ul>
  </nav>

  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->