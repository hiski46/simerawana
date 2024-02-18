<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Custom Website Murah" />
    <meta name="keywords" content="Custom Website,PHP,Code Igniter,Laravel">
    <meta name="author" content="kicat" />
    <title>Simerawana</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('/assets-new/logo.png') ?>" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link href="<?= base_url('/assets-new/css/styles.css') ?>" rel="stylesheet" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top"> <img src="<?= base_url('/assets-new/logo.png') ?>" class="logo" width="30" alt=""> simerawana</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#porto">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tech">Tools</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-lowercase" id="simerawana">Simerawana</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Transforming Ideas into Innovation <br> Our Code, Your Future!</h2>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center vh-100" id="about">
        <div class="container px-4 px-lg-5 my-auto">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <h2 class="text-white mb-4">Tentang Kami</h2>
                    <p class="text-white-50">
                        Simerawana adalah sebuah Tim yang berfokus pada web development dan solusi yang inovatif. Kami memiliki tujuan untuk membantu individu, perusahaan, dan organisasi membangun dan mengembangkan website dengan cara yang efektif dan menarik. Kami menggabungkan kreativitas, keahlian teknis, dan pemahaman yang mendalam tentang tren teknologi terbaru untuk menciptakan solusi web yang berkualitas tinggi.
                    </p>
                </div>
            </div>
            <!-- <img class="img-fluid" src="<?= base_url('/assets-new/img/sim2') ?>.jpg" alt="..." /> -->
        </div>
    </section>
    <!-- layanan-->
    <section class="layanan-section bg-light" id="layanan">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7" data-aos="fade-right"><img class="img-fluid mb-3 mb-lg-0" src="<?= base_url('/assets-new/img/development.jpg') ?>" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <img src="<?= base_url('/assets-new/logo-black.png') ?>" class="logo" width="20" alt="">
                        <h4>Web Development</h4>
                        <p class="text-black-50 mb-0">Web development adalah proses pembuatan dan pemeliharaan situs web atau aplikasi web. </p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500"><img class="img-fluid" src="<?= base_url('/assets-new/img/pembuatan.jpg') ?>" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100" data-aos="fade-up" data-aos-duration="1500">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <img src="<?= base_url('/assets-new/logo.png') ?>" class="logo" width="20" alt="">
                                <h4 class="text-white">Pembuatan Website</h4>
                                <p class="mb-0 text-white-50">Kami merancang dan mengembangkan berbagai jenis website, mulai dari website perusahaan hingga toko online yang interaktif. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500"><img class="img-fluid" src="<?= base_url('/assets-new/img/design.jpeg') ?>" alt="..." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100" data-aos="fade-up" data-aos-duration="1500">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <img src="<?= base_url('/assets-new/logo.png') ?>" class="logo" width="20" alt="">
                                <h4 class="text-white">Desain Web Kreatif</h4>
                                <p class="mb-0 text-white-50"> Kami menciptakan tampilan dan pengalaman pengguna yang menarik, responsif, dan sesuai dengan identitas produk Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row gx-0 mb-lg-0 justify-content-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500"><img class="img-fluid" src="<?= base_url('/assets-new/img/maintenance.jpg') ?>" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100" data-aos="fade-up" data-aos-duration="1500">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <img src="<?= base_url('/assets-new/logo.png') ?>" class="logo" width="20" alt="">
                                <h4 class="text-white">Pemeliharaan dan Dukungan</h4>
                                <p class="mb-0 text-white-50">Kami tidak hanya membuat website, tetapi juga memberikan layanan pemeliharaan dan fixing bug pada website anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-light porto-section" id="porto">
        <div class="container-md">
            <div class="row">
                <!-- Portfolio item 1 modal popup-->
                <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg p-0">
                        <div class="modal-content">
                            <div class="modal-body p-0" id="portfolioModalBody">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark py-1 px-2" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (count($porto) > 0) { ?>
                    <?php foreach ($porto as $key => $por) { ?>
                        <?php $imgs = json_decode($por->portofolio) ?>
                        <div class="col-lg-4 col-sm-6 mb-4 ">
                            <div class="portfolio-item bg-white shadow" onclick="modalPorto(<?= $por->id ?>)">
                                <div class="portfolio-link " style="text-decoration: none; cursor:pointer;" data-bs-toggle="modal" href="#portfolioModal<?= $key ?>">
                                    <div class="m-3 py-3">
                                        <div class="mb-3">
                                            <h5 class="text-muted"><?= $por->judul ?></h5>
                                            <?php foreach (json_decode($por->teknologi) as $val) { ?>
                                                <span class="badge text-bg-dark"><small><?= findById($teknologi, $val)[0]->nama ?></small></span>
                                            <?php } ?>
                                        </div>
                                        <img class="w-100 " style="object-fit: contain; height: 30vh;" src="/portofolio/<?= $imgs[0] ?>" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="col text-center">
                        <h3 class="section-subheading text-muted my-auto">Belum ada portofolio yang ditambahkan</h3>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <section class="bg-light tech-section" id="tech">
        <div class="container-fluid">
            <div class="row row-cols-md-6 row-cols-sm-4 gy-5 gx-sm-4 justify-content-center">
                <div class="col text-center">
                    <img src="<?= base_url('/tech/laravel.min.svg') ?>" class="tech-icon" alt="..."><br>
                    <caption class="tech-caption">Laravel</caption>
                </div>
                <div class="col text-center">
                    <img src="<?= base_url('/tech/ci-logo.png') ?>" class="tech-icon" alt="..."><br>
                    <caption class="tech-caption">Codeigniter</caption>
                </div>
                <div class="col text-center">
                    <img src="<?= base_url('/tech/bootstrap-logo.png') ?>" class="tech-icon" alt="..."><br>
                    <caption class="tech-caption">Bootstrap</caption>
                </div>
                <div class="col text-center">
                    <img src="<?= base_url('/tech/php-logo.svg') ?>" class="tech-icon" alt="..."><br>
                    <caption class="tech-caption">PHP</caption>
                </div>
                <div class="col text-center">
                    <img src="<?= base_url('/tech/js.png') ?>" class="tech-icon" alt="..."><br>
                    <caption class="tech-caption">Javascript</caption>
                </div>
                <div class="col text-center">
                    <img src="<?= base_url('/tech/html.png') ?>" class="tech-icon" alt="..."><br>
                    <caption class="tech-caption">HTML</caption>
                </div>
                <div class="col text-center">
                    <img src="<?= base_url('/tech/css.png') ?>" class="tech-icon" alt="..."><br>
                    <caption class="tech-caption">CSS</caption>
                </div>

                <div class="col text-center">
                    <img src="<?= base_url('/tech/jquery.svg') ?>" class="tech-icon" alt="..."><br>
                    <caption class="tech-caption">Jquery</caption>
                </div>
                <div class="col text-center">
                    <img src="<?= base_url('/tech/mysql.png') ?>" class="tech-icon" alt="..."><br>
                    <caption class="tech-caption">MySql</caption>
                </div>
            </div>
        </div>

    </section>

    <!-- Contact-->
    <section class="contact-section bg-black" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fab fa-twitter text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Twitter</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="https://twitter.com/<?= $facebook ?>" target="_blank"><?= $facebook ?></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!"><?= $email ?></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fab fa-whatsapp text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><?= $phone ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 5rem ;">
                <a href="#page-top"><img src="<?= base_url('/assets-new/logo-no-background.png') ?>" width="100" alt=""></a>

                <!-- <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a> -->
                <!-- <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a> -->
            </div>
        </div>
    </section>



    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; simerawana <?= date('Y') ?></div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('/assets-new/js/scripts.js') ?>"></script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        (function() {
            var options = {
                whatsapp: "<?= $phone ?>", // WhatsApp number
                call_to_action: "Kirimi kami pesan", // Call to action
                button_color: "#FF6550", // Color of button
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = 'https:',
                host = "getbutton.io",
                url = proto + '//static.' + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <script>
        $(document).ready(function() {
            $('[data-aos]').parent().addClass('hideOverflowOnMobile');
        })

        function modalPorto(id) {
            $('#portfolioModal').modal('show');
            $.ajax({
                url: '/detail-porto/' + id,
                method: 'GET',
                beforeSend: function() {
                    html = `<div class="d-flex justify-content-center align-items-center" style="min-height:50vh;"> <div class="spinner-border text-dark " role="status">
                            <span class="visually-hidden">Loading...</span>
                            </div></div>`;
                    $('#portfolioModalBody').html(html);
                },
                success: function(res) {
                    $('#portfolioModalBody').html(res);
                }
            })
        }
    </script>
</body>

</html>