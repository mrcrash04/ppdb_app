<?php $this->load->view('frontend/header/header'); ?>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
    <img class="position-absolute top-50 start-50 translate-middle" src="<?= base_url(); ?>frontend/img/icons/loader.png" alt="Icon">
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0"><img class="me-3" src="<?= base_url(); ?>frontend/img/icons/babus6.png" alt="Icon"></h1>
    </a>
    <div class="collapse navbar-collapse" id="">
        <a href="" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"><img class="me-3" src="<?= base_url(); ?>frontend/img/icons/wilujeng5.png" alt="Icon"></h1>
        </a>
    </div>
</nav>
<!-- Navbar End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="">
        <div class="col-lg-auto px-5 text-end">
            <div class="py-3 me-3">

                <?php foreach ($admin as $b) : ?>
                    <!-- <marquee><a class="text-body px-1" href="#"></a></marquee> -->
                    <marquee><a class="text-body px-1" href=""><?= $b->slug ?></a></marquee>

                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?= base_url('Home/index'); ?>" class="nav-item nav-link active"><i class="fas fa-home"></i>&ensp;Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                <div class="dropdown-menu border-0 m-0">
                    <a href="<?= base_url('Home/sejarah'); ?>" class="dropdown-item">SEJARAH</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Unit Pendidikan Formal</a>
                <div class="dropdown-menu border-0 m-0">
                    <a href="feature.html" class="dropdown-item"><img style="width: 20px; height: 20px;" class="img-fluid" src="<?= base_url(); ?>frontend/img/MI.png" alt="">&ensp;MADRASAH IBTIDAYAH</a>
                    <a href="feature.html" class="dropdown-item"><img style="width: 20px; height: 20px;" class="img-fluid" src="<?= base_url(); ?>frontend/img/MT.png" alt="">&ensp;MADRASAH TSANAWIYAH</a>
                    <a href="feature.html" class="dropdown-item"><img style="width: 20px; height: 20px;" class="img-fluid" src="<?= base_url(); ?>frontend/img/MA.png" alt="">&ensp;MADRASAH ALIYAH</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Unit Pendidikan Non Formal</a>
                <div class="dropdown-menu border-0 m-0">
                    <a href="feature.html" class="dropdown-item">PESANTREN</a>
                    <a href="feature.html" class="dropdown-item">MADRASAH DINIYAH</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">UNIT SOSIAL KEAGAMAAN</a>
                <div class="dropdown-menu border-0 m-0">
                    <a href="feature.html" class="dropdown-item">DKM BABUSSALAM</a>
                    <a href="project.html" class="dropdown-item">MAJLIS TA'LIM</a>
                    <a href="team.html" class="dropdown-item">MAJLIS SHALAWATAN</a>
                    <a href="appointment.html" class="dropdown-item">LEMBAGA WAKAF/ INFAK/ SODAQOH</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">GALLERY</a>
                <div class="dropdown-menu border-0 m-0">
                    <a href="feature.html" class="dropdown-item"></a>
                    <a href="project.html" class="dropdown-item"></a>
                    <a href="team.html" class="dropdown-item"></a>
                    <a href="appointment.html" class="dropdown-item"></a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->


<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">

    <div class="owl-carousel header-carousel position-relative">

        <?php
        foreach ($admin as $key => $value) {
            $active = ($key == 0) ? 'active' : '';
            echo ' <div class="owl-carousel-item " data-dot="<img src=' . base_url() . 'images/' . $value->images . '>">
                    <div class="item '  . $active . '" style="width:100%">
                                <img src="' . base_url() . 'images/' . $value->images . '" alt="..." >
                                
                            </div>
                            </div>';
        }
        ?>
    </div>

</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img style="width:350px; height:600px;" class="img-fluid" src="<?= base_url(); ?>frontend/img/Pak-Ayi.png" alt="">

            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4">Sambutan Ketua YPAI Baabussalaam</h1>
                <b>
                    <p style="text-align: justify;">Bismillahirrohmaanirrohiim<br>Assalaamu’alaikum Warahmatullohi Wabarakatuh</p>
                    <p style="text-align: justify;">&ensp;&ensp;&ensp;&ensp;Alhamdulillahi Robbil ‘Alamiin akhirnya selesailah pembuatan situs resmi Yayasan Pendidikan Agama Islam (YPAI) Baabussalaam. Situ ini sebagai media untuk memberikan informasi kepada segenap lapisan masyarakat dan jamaah yang memerlukannya. Meskipun situs ini jauh dari sempurna, tapi paling tidak Baabussalaam ingin sejajar dengan lembaga-lembaga lain untuk memanfaatkan teknologi sebagai media untuk berkomunikasi.</p>
                    <p style="text-align: justify;">&ensp;&ensp;&ensp;&ensp;Kami mengucapkan terima kasih kepada semua pihak yang telah memberikan support baik langsung ataupun tidak langsung untuk pembuatan situs ini. Tidak ada gading yang tak retak. Kami sangat terbuka jika ada masukan-masukan, kritikan yang membangun untuk perbaikan kedepan.</p>
                    <p class="mb-4">Wassalaamu’alaikum Warahmatullohi Wabarakaatuh</p>
                </b>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-xxl py-5 text-center">
    <div class="container pt-5">
        <div class="row g-4">
            <div class="col-lg-14 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="fact-item bg-light h-100 p-5">
                    <h3 class="mb-3">Visi</h3>
                    <p class="mb-0">Terwujudnya pribadi muslim yang berakhlaqul karimah.</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-14 col-md-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="fact-item bg-light h-100 p-5">
                    <h3 class="mb-3">Misi</h3>
                    <p class="mb-0">1. Meningkatkan dan mengembangkan kelembagaan<br>2. Meningkatkan kualitas keagamaan<br>3. Mengembangkan sumber daya
                        manusia menjadi sumber daya yang unggul, kreatif, inovatif, bertanggung jawab, serta menguasai ilmu<br>&ensp;&ensp;pengetahuan
                        dan teknologi yang tidak menyimpang dari ajaran Islam.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Our Services</h4>
            <h1 class="display-5 mb-4">We Focused On Modern Architecture And Interior Design</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="<?= base_url(); ?>frontend/img/service-1.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="<?= base_url(); ?>frontend/img/icons/icon-5.png" alt="Icon">
                        <h3 class="mb-3">Architecture</h3>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="<?= base_url(); ?>frontend/img/service-2.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="<?= base_url(); ?>frontend/img/icons/icon-6.png" alt="Icon">
                        <h3 class="mb-3">3D Animation</h3>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="<?= base_url(); ?>frontend/img/service-3.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="<?= base_url(); ?>frontend/img/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">House Planning</h3>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="<?= base_url(); ?>frontend/img/service-4.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="<?= base_url(); ?>frontend/img/icons/icon-8.png" alt="Icon">
                        <h3 class="mb-3">Interior Design</h3>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="<?= base_url(); ?>frontend/img/service-5.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="<?= base_url(); ?>frontend/img/icons/icon-9.png" alt="Icon">
                        <h3 class="mb-3">Renovation</h3>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="<?= base_url(); ?>frontend/img/service-6.jpg" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="<?= base_url(); ?>frontend/img/icons/icon-10.png" alt="Icon">
                        <h3 class="mb-3">Construction</h3>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->









<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="section-title">Why Choose Us!</h4>
                <h1 class="display-5 mb-4">Why You Should Trust Us? Learn More About Us!</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="<?= base_url(); ?>frontend/img/icons/icon-2.png" alt="Icon">
                            <div class="ms-4">
                                <h3>Design Approach</h3>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="<?= base_url(); ?>frontend/img/icons/icon-3.png" alt="Icon">
                            <div class="ms-4">
                                <h3>Innovative Solutions</h3>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="<?= base_url(); ?>frontend/img/icons/icon-4.png" alt="Icon">
                            <div class="ms-4">
                                <h3>Project Management</h3>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-img">
                    <img class="img-fluid" src="<?= base_url(); ?>frontend/img/about-2.jpg" alt="">
                    <img class="img-fluid" src="<?= base_url(); ?>frontend/img/about-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Project Start -->
<div class="container-xxl project py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Our Projects</h4>
            <h1 class="display-5 mb-4">Visit Our Latest Projects And Our Innovative Works</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <h3 class="m-0">01. Modern Complex</h3>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <h3 class="m-0">02. Royal Hotel</h3>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <h3 class="m-0">03. Mexwel Buiding</h3>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <h3 class="m-0">04. Shopping Complex</h3>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url(); ?>frontend/img/project-1.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url(); ?>frontend/img/project-2.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url(); ?>frontend/img/project-3.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url(); ?>frontend/img/project-4.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Team Members</h4>
            <h1 class="display-5 mb-4">We Are Creative Architecture Team For Your Dream Home</h1>
        </div>
        <div class="row g-0 team-items">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?= base_url(); ?>frontend/img/team-1.jpg" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Architect Name</h3>
                        <span class="text-primary">Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?= base_url(); ?>frontend/img/team-2.jpg" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Architect Name</h3>
                        <span class="text-primary">Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?= base_url(); ?>frontend/img/team-3.jpg" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Architect Name</h3>
                        <span class="text-primary">Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?= base_url(); ?>frontend/img/team-4.jpg" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Architect Name</h3>
                        <span class="text-primary">Designation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="section-title">Appointment</h4>
                <h1 class="display-5 mb-4">Make An Appointment To Start Your Dream Project</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                <i class="fa fa-2x fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Call Us Now</p>
                                <h3 class="mb-0">+012 345 6789</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                <i class="fa fa-2x fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Mail Us Now</p>
                                <h3 class="mb-0">info@example.com</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control" placeholder="Your Name" style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="email" class="form-control" placeholder="Your Email" style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control" placeholder="Your Mobile" style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <select class="form-select" style="height: 55px;">
                            <option selected>Choose Service</option>
                            <option value="1">Service 1</option>
                            <option value="2">Service 2</option>
                            <option value="3">Service 3</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="date" id="date" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="time" id="time" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                        </div>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Testimonial</h4>
            <h1 class="display-5 mb-4">Thousands Of Customers Who Trust Us And Our Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='<?= base_url(); ?>frontend/img/testimonial-1.jpg' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                <h3>Client Name</h3>
                <span class="text-primary">Profession</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='<?= base_url(); ?>frontend/img/testimonial-2.jpg' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                <h3>Client Name</h3>
                <span class="text-primary">Profession</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='<?= base_url(); ?>frontend/img/testimonial-3.jpg' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                <h3>Client Name</h3>
                <span class="text-primary">Profession</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<?php $this->load->view('frontend/footer/footer'); ?>