<div id="carouselPorto" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php $imgs = json_decode($porto->portofolio) ?>
        <?php foreach ($imgs as $id => $img) { ?>
            <div class="carousel-item <?= $id == 0 ? 'active' : '' ?>">
                <img src="portofolio/<?= $img ?>" class="w-100" style="object-fit: contain; max-height: 500px;" alt="...">
            </div>

        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPorto" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselPorto" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="p-3">
    <h3><?= $porto->judul ?></h3>
    <?php foreach (json_decode($porto->teknologi) as $val) { ?>
        <span class="badge text-bg-dark"><small><?= findById($teknologi, $val)[0]->nama ?></small></span>
    <?php } ?>

    <p><?= $porto->deskripsi ?></p>
</div>