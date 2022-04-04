<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <?php $this->load->view('template/css'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url('images/'); ?>logo1.png" alt="" width="10%">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Sistem Informasi PPDB BAABUSSALAAM </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">

                </li>

                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link" style="text-align: center; font-size: 20px;">
                <span class="brand-text font-weight-light">
                    <b> &nbsp; SIPPDB</b>
                </span>
            </a>

            <!-- Sidebar -->
            <?php $this->load->view('template/sidebar');
            ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Data Pendaftaran Calon Peserta Didik</b></span></h3>
                            <!-- <span class="text-light btn-success"><i class="fas fa-check"></i> LULUS</span>
                            <span class="text-success bg-dark"><i class="fas fa-exclamation-triangle"></i> LULUS</span> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">

                                <div class="col-2">
                                    <div class="form-group row">
                                        <!-- <input type="text" class="form-control"="no_pendaftaran" class="form-control" value="<?php echo $detail->nama_lengkap ?>"> -->
                                        <div class="col">
                                            <img src="<?php echo base_url() . 'images/pas_foto/' . $detail->image ?>" width="100%">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">No Pendaftaran</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->no_pendaftaran ?>">
                                        </div>
                                        <label for="" class="col-sm-3 col-form-label">Tanggal Pendaftaran</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" class="form-control" value="<?php echo $detail->date_created ?>">
                                        </div>
                                        <div class="col-sm-2 mt-2 pl-4">
                                            <?= $detail->verifikasi > 0 ? ' <span class="bg-success btn-sm text-dark rounded pl-2 pr-2"><i class="fas fa-check"></i>&nbsp;&nbsp;LULUS</span> ' : '<span class="bg-warning btn-sm text-dark rounded pl-2 pr-2"><i class="fas fa-times"></i>&nbsp;&nbsp;BELUM TES</span>' ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" class="form-control" value="<?php echo $detail->nama_lengkap ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">NISN</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" class="form-control" value="<?php echo $detail->nisn ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Tempat</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" class="form-control" value="<?php echo $detail->tempat ?>">
                                        </div>
                                        <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" class="form-control" value="<?php echo $detail->tanggal_lahir ?>">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" class="form-control" value="<?php echo $detail->jk ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->alamat ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label">Provinsi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->provinsi ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label">Kecamatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->kecamatan ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label">Kelurahan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->kelurahan ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Anak Ke</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->alamat ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label">Status Dalam Keluarga</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->alamat ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Nomor Telp/HP</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->nomor_hp ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Jenjang Madrasah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->pendidikan ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Asal Sekolah RA/TK</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->tk ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Asal Sekolah MI/SD</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->sd ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Asal Sekolah Mts/SMP</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->smp ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->alamat_sekolah ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Nama Lengkap Ayah / Ibu / Wali</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->orangtua ?>">
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->nama_ortu ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">NIK</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->nik ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->alamat_ortu ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->pekerjaan ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Nomor Telp/Hp</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" value="<?php echo $detail->no_telp_ortu ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <div class="col-md-7 offset-md-5 mr-8 pl-5">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-dark" id="kirim">Ubah</button>


                                            <a href="#" class="btn btn-outline-danger mr-1 mb-1 " data-toggle="modal" data-target="#modal-sm">Hapus</a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->

            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>&copy; &nbsp;Support by STMIK MARDIRA INDONESIA 2022
            <p style=" color:grey; opacity: 70%;">Team Development Rizky & Falih</p>

    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form action="<?php echo base_url() . 'Siswa/hapus/' . $detail->id_formulir; ?>">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fas fa-exclamation-triangle"></i>&nbsp;Peringatan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Data Siswa Akan Hapus ???</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <!-- <button type="button" class="btn btn-default col-4" data-dismiss="modal">Tidak</button>
                        <a href="" class="btn  btn-danger col-4">Ya</a> -->
                        <input type="submit" data-dismiss="modal" value="TIDAK" class="btn  btn-default col-4">
                        <input type="submit" value="YA" class="btn  btn-danger col-4">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <?php $this->load->view('template/js');
    ?>
</body>

</html>