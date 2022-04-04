<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Google Font: Source Sans Pro -->

    <?php $this->load->view('template/css'); ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/ekko-lightbox/ekko-lightbox.css">
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
                            <h1 class="m-0">&nbsp; Setting Banner</h1>

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-success">
                                            <div class="card-header">
                                                <h4 class="card-title">
                                                    Upload banner
                                                </h4>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <form action="<?php echo base_url('Setting/addbanner') ?>" method="POST" enctype="multipart/form-data">
                                                        <div class="form-group row mt-3">
                                                            <label for="judul" class="ml-4 mr-4 mt-1">Judul</label>
                                                            <div>
                                                                <input type="text" class="form-control" id="judul" name="slug" placeholder="Nama Lengkap">
                                                            </div>
                                                        </div>
                                                        <img class="card-img-top mt-3 ml-3" src="<?= base_url(); ?>images/banner_no.jpg" style="width: 18rem;" id="image-preview" alt="image preview">

                                                        <label for="formFile" class="form-label ml-4 mt-2"></label>
                                                        <div class="col-3 mt-2">
                                                            <input class="form-control" type="file" id="image-source" name="images" onchange="previewImage();">
                                                        </div>
                                                        <label for="formFile" class="form-label ml-4 mt-2">Select image min width: 1920px,<br>
                                                            min height: 1080px, max size: 500 KB,<br>
                                                            ratio: 16:7</label>
                                                        <div class="ml-4 mb-3">
                                                            <input type="submit" value="upload" class="btn btn-primary col-3">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="card card-success">
                                            <div class="card-header">
                                                <h4 class="card-title">Banner Management</h4>
                                            </div>
                                            <div class="row">
                                                <?php foreach ($admin as $a) {
                                                    echo '<div class="col-4">
                                                    <div class="card mt-2 ml-2" style="width: 18rem;">
                                                        <img class="card-img-top" src="' . base_url() . 'images/' . $a->images . '" alt="Card image cap">
                                                        <p class="mt-2 ml-2">
                                                            ' . $a->slug . '
                                                        </p>
                                                        <div class="row ml-1 mr-1">
                                                            <div class="col-6 mt-2 mb-2">
                                                                <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#modal-se"><i class="fas fa-times"> </i> Hapus</a>
                                                            </div>
                                                            <div class="col-6 mt-2 mb-2">
                                                                <a href="" class="btn btn-info btn-block"><i class="fas fa-pen"> </i> Edit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
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
    <div class="modal fade" id="modal-se">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Peringatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin anda Akan Hapus Banner ???</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default col-4" data-dismiss="modal">Tidak</button>
                    <?php echo anchor('Setting/delete/' . $a->id, 'Hapus', array('class' => 'btn btn-outline-danger')) ?>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <?php $this->load->view('template/js');
    ?>

    <script>
        function previewImage() {
            document.getElementById("image-preview");
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

            oFReader.onload = function(oFREvent) {
                document.getElementById("image-preview").src = oFREvent.target.result;
            };
        };
    </script>

</body>

</html>