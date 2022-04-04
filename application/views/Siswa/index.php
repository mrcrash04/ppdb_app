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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Pendaftaran</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">

                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Pendaftaran</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NO PENDAFTARAN</th>
                                                <th>NAMA LENGKAP</th>
                                                <th>NISN</th>
                                                <th>TEMPAT LAHIR</th>
                                                <th>TANGGAL LAHIR</th>
                                                <th>STATUS</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <?php $no = 1;
                                            foreach ($siswa as $a) : ?>
                                                <td><?= $no++; ?></td>
                                                <td><?= $a->no_pendaftaran ?></td>
                                                <td><?= $a->nama_lengkap ?></td>
                                                <td><?= $a->nisn > 0 ? $a->nisn : '-' ?></td>
                                                <td><?= $a->tempat ?></td>
                                                <td><?= $a->tanggal_lahir ?></td>
                                                <td class="mt-3"><?= $a->verifikasi > 0 ? ' <span class="bg-success btn-sm text-dark rounded pl-2 pr-2"><i class="fas fa-check"></i>&nbsp;&nbsp;LULUS</span> ' : '<span class="bg-warning btn-sm text-dark rounded pl-2 pr-2"><i class="fas fa-times"></i>&nbsp;&nbsp;BELUM TES</span>' ?></td>
                                                <!-- <td class="pt-3"><a href="<?php echo base_url('') ?>" class="btn-sm btn-primary "><i class="fas fa-info-circle"></i>Detail</a></td> -->
                                                <td class="mt-3"><?php echo anchor('siswa/detail/' . $a->id_formulir, ' <i class="fas fa-info-circle"></i> ', 'class="btn-sm btn-primary "'); ?>&nbsp;
                                                    <?php echo anchor('siswa/edit/' . $a->id_formulir, ' <i class="fas fa-edit"></i> ', ['class' => "btn-sm btn-success ", 'data-toggle' => "modal", 'data-target' => "#modal-edit"]); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
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
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-edit">
            <div class="modal-content">
                <form action="<?= base_url('Siswa/edit_verifikasi'); ?>" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="far fa-question-circle"></i> Keterangan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="nisn" class="col-sm-4 col-form-label">Status</label></label>
                            <div class="col-sm-8">
                                <!-- <select class="select2" multiple="multiple" data- placeholder="Select a State" style="width: 100%;"> -->
                                <input type="hidden" name="id_formulir">
                                <select class="form-control select" name="verifikasi">
                                    <option>LULUS</option>
                                    <option>TIDAK LULUS</option>
                                    <option>BELUM TEST</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default col-4" data-dismiss="modal">Tidak</button>
                        <a href="" class="btn  btn-primary col-4">Ya</a>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <?php $this->load->view('template/js');
    ?>
    <!-- jQuery -->
    <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>