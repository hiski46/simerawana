<!-- Masthead-->
<header class="masthead py-0">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php if (count($carousel) > 0) { ?>
                <?php foreach ($carousel as $key => $car) { ?>
                    <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
                        <img src="/carousel/<?= $car->img ?>" class="vh-100 vw-100" alt="..." style="object-fit: cover;">
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</header>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>

        </div>
        <div class="row">
            <?php if (count($porto) > 0) { ?>
                <?php foreach ($porto as $key => $por) { ?>
                    <?php $imgs = json_decode($por->portofolio) ?>
                    <div class="col-lg-4 col-sm-6 mb-4 ">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item bg-white shadow">
                            <a class="portfolio-link " style="text-decoration: none;" data-bs-toggle="modal" href="#portfolioModal<?= $key ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content text-center"><i class="fas fa-eye fa-3x"></i> <br> <b class="text-center">Detail </b> <br> <small><?= count($imgs) ?> Foto</small></div>
                                </div>
                                <div class="m-3 py-3">
                                    <div class="mb-3">
                                        <h5 class="text-muted"><?= $por->judul ?></h5>
                                        <?php foreach (json_decode($por->teknologi) as $val) { ?>
                                            <span class="badge text-bg-dark"><small><?= findById($teknologi, $val)[0]->nama ?></small></span>
                                        <?php } ?>
                                    </div>
                                    <img class="w-100 " style="object-fit: contain; height: 30vh;" src="/portofolio/<?= $imgs[0] ?>" alt="..." />

                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Portfolio item 1 modal popup-->
                    <div class="portfolio-modal modal fade" id="portfolioModal<?= $key ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content p-3">
                                <div class="close-modal" data-bs-dismiss="modal"><?= icon('x-lg') ?></div>
                                <div class="modal-header">
                                    <div class="row">
                                        <div class="col">
                                            <h3> <?= $por->judul ?></h3>

                                        </div>
                                    </div>

                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-12 col-lg-7">
                                            <div id="carouselPorto<?= $key ?>" class="carousel slide " data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <?php foreach ($imgs as $id => $img) { ?>
                                                        <div class="carousel-item <?= $id == 0 ? 'active' : '' ?>">
                                                            <img src="portofolio/<?= $img ?>" class="w-100" style="object-fit: contain; max-height: 500px;" alt="...">
                                                        </div>

                                                    <?php } ?>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPorto<?= $key ?>" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselPorto<?= $key ?>" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-5 text-start">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>Teknologi</th>
                                                        <td>:
                                                            <?php foreach (json_decode($por->teknologi) as $val) { ?>
                                                                <span class="badge text-bg-dark"><small><?= findById($teknologi, $val)[0]->nama ?></small></span>
                                                            <?php } ?>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="vertical-align: top;">
                                                            Deskripsi
                                                        </th>
                                                        <td> :<?= $por->deskripsi ?>
                                                                
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
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
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
        </div>
        <?= $tentang ?>
    </div>
</section>
<!-- Sejarah-->
<section class="page-section bg-light" id="sejarah">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Sejarah</h2>
        </div>
        <?= $sejarah ?>
    </div>
</section>