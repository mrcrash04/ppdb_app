<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta required name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
    <style>
        body {
            background-image: url('images/Asset-2.png');
            background-color: #D5EAD8;
            background-repeat: repeat;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini justify-content-center">


    <!-- Site wrapper -->
    <div class="wrapper">

        <div class="container ">
            <!-- <div class="card card-success">
                <div class="card-header">

                    <h3 class="card-title"><i class="fas fa-warning"></i>&nbsp; Informasi</h3>

                </div>
                <div class="container">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">

                                <button class="btn btn-success mr-1 mb-1">Alur PPDB YPAI BAABUSSALAAM</button>
                                <button class="btn btn-primary mr-1 mb-1">Cek Status Pendaftaran</button>
                                <button class="btn btn-dark mr-1 mb-1">Kembali ke Home</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="card-body pt-9">
                <div class=" row">
                    <div class="col-2">
                        <img src="<?= base_url('images/'); ?>logo1.png" width="65%" style="margin-left: 40px;">
                    </div>
                    <div class="col-10 mt-2">
                        <h4><b>FORMULIR PENDAFTARAN PESERTA DIDIK BARU ( PPDB )<br>
                                YPAI BAABUSSALAAM KOTA BANDUNG<br>
                                TAHUN PELAJARAN <?php echo date("Y") ?> / <?php echo date("Y", strtotime("+1 year")); ?></b></h4>
                        <h5>Jl. Sukarma Blk. No.19 ( Kopo ) Kel. Babakan Asih
                            Kec. Bojongloa Kaler Kota Bandung 40232</h5>
                    </div>
                </div>
            </div> -->
            <div class="card ">

                <div class="container">
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-2">
                                <img src="<?= base_url('images/'); ?>logo1.png" width="65%" style="margin-left: 40px;">
                            </div>
                            <div class="col-10 mt-2">
                                <h4><b>FORMULIR PENDAFTARAN PESERTA DIDIK BARU ( PPDB )<br>
                                        YPAI BAABUSSALAAM KOTA BANDUNG<br>
                                        TAHUN PELAJARAN <?php echo date("Y") ?> / <?php echo date("Y", strtotime("+1 year")); ?></b></h4>
                                <h5>Jl. Sukarma Blk. No.19 ( Kopo ) Kel. Babakan Asih
                                    Kec. Bojongloa Kaler Kota Bandung 40232</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <!-- ini header informasi -->
            <div class="card card-success">
                <div class="card-header">

                    <h3 class="card-title"><i class="fas fa-user-edit"></i>&nbsp; Informasi Calon Peserta Didik</h3>

                </div>
                <div class="container">
                    <div class="card-body">
                        <form action="<?php echo base_url('Formulir/add'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">No Pendaftaran</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" required name="no_pendaftaran" class="form-control" value="<?php echo sprintf("%04s", $no_pendaftaran) ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="namalengkap" class="col-sm-3 col-form-label">Nama Lengkap<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="namalengkap" required name="nama_lengkap" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nisn" class="col-sm-3 col-form-label">NISN<span class="text-danger">*</span></label></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="myCheck" required name="nisn" placeholder="Nomor Induk Siswa Nasional">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempat" class="col-sm-3 col-form-label">Tempat<span class="text-danger">*</span></label></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tempat" required name="tempat" placeholder="Tempat Tanggal Lahir">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Lahir<span class="text-danger">*</span></label></label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="tanggal" required name="tanggal_lahir" placeholder="Tempat Tanggal Lahir">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nisn" class="col-sm-3 col-form-label">Jenis Kelamin<span class="text-danger">*</span></label></label>
                                        <div class="col-sm-9">

                                            <select class="form-control" id="input-6" required name="jk">
                                                <option value=""> --Jenis Kelamin-- </option>
                                                <option>Laki - Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Alamat Lengkap<span class="text-danger">*</span></label></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="3" required name="alamat" placeholder="Alamat Lengkap"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Provinsi</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="provinsi" required name="provinsi">
                                                <option value="" selected="selected">-- Pilih Provinsi --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Kota / Kabupaten</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="kota" required name="kota">
                                                <option value="" selected="selected">-- Pilih Kab/Kota --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Kecamatan</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="kecamatan" required name="kecamatan">
                                                <option value="" selected="selected">-- Pilih Kecamatan --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Desa / kelurahan</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="kelurahan" required name="kelurahan">
                                                <option selected="selected">-- Pilih Kelurahan --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nisn" class="col-sm-3 col-form-label">Anak Ke berapa<span class="text-danger">*</span></label></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nisn" required name="anak" placeholder="Anak Ke berapa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nisn" class="col-sm-3 col-form-label">Status<span class="text-danger">*</span></label></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nisn" required name="status" placeholder="Status Dalam Keluarga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nisn" class="col-sm-3 col-form-label">Nomor Telp/Hp<span class="text-danger">*</span></label></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nisn" required name="nomor_hp" placeholder="Nomor Telp/Hp">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <div class="col">
                                            <input type="submit" class="form-control" value="Simpan" class="btn btn-success">
                                        </div>
                                    </div> -->

                                </div>
                                <div class="col-4">
                                    <div class="form-group row">
                                        <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label> -->
                                        <div class="text-center ml-auto">
                                            <div class="upload-icon">
                                                <img src="images/no_image.png" width="50%" id="image-preview" alt="image preview" style="margin-left: 25px; margin-top: 10px">
                                            </div>
                                        </div>
                                        <div class="text-center ml-5">
                                            <div class="mb-3">
                                                <div class="custom-file">
                                                    <label for="formFile" class="form-label">Pas Foto 3x4 <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="file" required name="image" id="image-source" onchange="previewImage();">
                                                    <label for="formFile" class="form-label">Pas foto ukuran 3x4. ukuran max 1MB <br> format: JPG,JPEG,PNG</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="image-upload">
                                        <label for="file-input">
                                        <div class="upload-icon">
                                            <img src="images/no_image.png" id="image-preview" alt="image preview" width="30%">
                                            </div>
                                        </label>
                                    <input type="file" id="image-source" onchange="previewImage();">
                                    </div> -->

                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
            <!-- end informasi  -->
            <!-- ini header asal -->
            <div class="card card-success">
                <div class="card-header">

                    <h3 class="card-title"><i class="fas fa-school"></i>&nbsp; Asal Sekolah / Madrasah</h3>

                </div>
                <div class="container">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">

                                <div class="form-group row">
                                    <label for="namalengkap" class="col-sm-4 col-form-label">Pilihan Jenjang Madrasah<span class="text-danger">*</span></label>
                                    <div class="col-sm-8 mt-1">
                                        <!-- <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox1">1. IBTIDAIYAH&nbsp;&nbsp;</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" onclick="myFunction()">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox2">2. TSANAWIYAH&nbsp;&nbsp;</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" onclick="myFunction2()">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="inlineCheckbox3">3. ALIYAH&nbsp;&nbsp;</label>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" onclick="myFunction3()">
                                        </div> -->
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" required name="pendidikan" id="inlineRadio1" value="IBTIDAIYAH" onclick="myFunction()">
                                            <label class=" form-check-label" for="inlineRadio1">1. IBTIDAIYAH&nbsp;&nbsp;</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" required name="pendidikan" id="inlineRadio2" value="TSANAWIYAH" onclick="myFunction2()">
                                            <label class=" form-check-label" for="inlineRadio2">2. TSANAWIYAH&nbsp;&nbsp;</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" required name="pendidikan" id="inlineRadio3" value="ALIYAH" onclick="myFunction3()">
                                            <label class=" form-check-label" for="inlineRadio3">3. ALIYAH&nbsp;&nbsp;</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="namalengkap" class="col-sm-4 col-form-label">Asal sekolah<span class="text-danger">*</span></label>
                                    <div class="col-sm-8 mt-1">

                                    </div>
                                </div>
                                <div class="form-group row" style="margin-top: -54px;">
                                    <label for="nisn" class="col-sm-4 col-form-label text-right"> RA/TK</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" required name="tk" id="nisn" placeholder="RA/TK">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nisn" class="col-sm-4 col-form-label text-right"> MI/SD</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" required name="sd" id="myCheck1" id="nisn" placeholder="MI/SD">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nisn" class="col-sm-4 col-form-label text-right"> Mts/SMP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" required name="smp" id="myCheck2" id="nisn" placeholder="Mts/SMP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nisn" class="col-sm-4 col-form-label">Alamat Sekolah <span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="4" required name="alamat_sekolah" placeholder="Alamat Sekolah"></textarea>

                                    </div>
                                </div>

                            </div>
                            <div class="col-4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ini end asal -->
            <!-- ini header ortu -->
            <div class="card card-success">
                <div class="card-header">

                    <h3 class="card-title"><i class="fas fa-user-friends"></i>&nbsp; Informasi Orang Tua / Wali Calon Peserta Didik Baru</h3>

                </div>
                <div class="container">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group row">
                                    <label for="nisn" class="col-sm-5 col-form-label">Nama Lengkap Ayah / Ibu / Wali<span class="text-danger">*</span></label></label>
                                    <div class="col-sm-2">
                                        <!-- <select class="select2" multiple="multiple" data- placeholder="Select a State" style="width: 100%;"> -->
                                        <select class="form-control select" required name="orangtua">
                                            <option>Ayah</option>
                                            <option>Ibu</option>
                                            <option>Wali</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="namalengkap" required name="nama_ortu" placeholder="Nama Lengkap">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="namalengkap" class="col-sm-5 col-form-label">Nomor NIK<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="namalengkap" required name="nik" placeholder="Nomor NIK">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-5 col-form-label">Alamat Lengkap<span class="text-danger">*</span></label></label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="4" required name="alamat_ortu" placeholder="Alamat Lengkap"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="namalengkap" class="col-sm-5 col-form-label">Pekerjaan<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="pekerjaan" required name="pekerjaan" placeholder="Pekerjaan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="namalengkap" class="col-sm-5 col-form-label">No telp/HP<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="no_telp_ortu" required name="no_telp_ortu" placeholder="No telp/HP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-7 offset-md-5 mr-8">
                                        <button type="submit" class="btn btn-success mr-1 mb-1 waves-effect waves-dark" id="kirim">Simpan &amp; Daftar</button>
                                        <a href="#" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-dark" onclick="location.reload()">Reset</a>
                                    </div>
                                </div>


                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ini end ortu -->
                </div> <!-- /.card-body -->
            </div>
            <!-- ./wrapper -->
            <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
            <!-- ini pilihan check box -->
            <script>
                function myFunction() {
                    document.getElementById("myCheck").disabled = true;

                    document.getElementById("myCheck1").disabled = true;

                    document.getElementById("myCheck2").disabled = true;
                }
            </script>
            <script>
                function myFunction2() {
                    document.getElementById("myCheck").disabled = false;

                    document.getElementById("myCheck1").disabled = false;

                    document.getElementById("myCheck2").disabled = true;
                }
            </script>
            <script>
                function myFunction3() {
                    document.getElementById("myCheck").disabled = false;

                    document.getElementById("myCheck1").disabled = false;

                    document.getElementById("myCheck2").disabled = false;
                }
            </script>
            <!-- ini end check box -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <script>
                const SITE_URL = "<?= site_url() ?>";
                $(document).ready(function() {
                    $(() => {
                        $.ajax({
                            type: "GET",
                            url: `${SITE_URL}formulir/getProvinsi`,
                            dataType: "json",
                            success: function(response) {
                                let toAppend = '';
                                $.each(response.result.provinsi, function(i, o) {
                                    toAppend += `<option value="${o.id}">${o.nama}</option>`;
                                });
                                $('#provinsi').html(toAppend);
                            }
                        });
                    });
                    $('#provinsi').change(function(e) {
                        e.preventDefault();
                        if ($(this).val() != '') {
                            $.ajax({
                                type: "POST",
                                url: `${SITE_URL}formulir/getKabKota`,
                                data: {
                                    id: $(this).val()
                                },
                                dataType: "json",
                                success: function(response) {
                                    let toAppend = '';
                                    $.each(response.result.kota_kabupaten, function(i, o) {
                                        toAppend += `<option value="${o.id}">${o.nama}</option>`;
                                    });
                                    $('#kota').html(toAppend);
                                }
                            });
                        }
                    });
                    $('#kota').change(function(e) {
                        e.preventDefault();
                        if ($(this).val() != '') {
                            $.ajax({
                                type: "POST",
                                url: `${SITE_URL}formulir/getKec`,
                                data: {
                                    id: $(this).val()
                                },
                                dataType: "json",
                                success: function(response) {
                                    let toAppend = '';
                                    $.each(response.result.kecamatan, function(i, o) {
                                        toAppend += `<option value="${o.id}">${o.nama}</option>`;
                                    });
                                    $('#kecamatan').html(toAppend);
                                }
                            });
                        }
                    });
                    $('#kecamatan').change(function(e) {
                        e.preventDefault();
                        if ($(this).val() != '') {
                            $.ajax({
                                type: "POST",
                                url: `${SITE_URL}formulir/getKel`,
                                data: {
                                    id: $(this).val()
                                },
                                dataType: "json",
                                success: function(response) {
                                    let toAppend = '';
                                    $.each(response.result.kelurahan, function(i, o) {
                                        toAppend += `<option value="${o.id}">${o.nama}</option>`;
                                    });
                                    $('#kelurahan').html(toAppend);
                                }
                            });
                        }
                    });
                });
            </script>
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
            <!-- jQuery -->
            <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
</body>

</html>