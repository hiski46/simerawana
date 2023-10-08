<h1><?= $title ?></h1>
<?= breadcrumb() ?>

<div class="container-lg mt-3">


    <div class=" row border p-2">
        <form action="/content/portofolio/edit/<?= $portofolio->id ?>" method="post" onsubmit="showLoader()" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control rounded-0" placeholder="Cth: Company Profile" value="<?= $portofolio->judul ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Teknologi</label>
                        <select type="text" name="teknologi[]" id="teknologi" multiple="multiple" class="form-select rounded-0" placeholder="contoh: Company Profile" required>
                            <option value=""></option>
                            <?php foreach ($teknologi as $t) { ?>
                                <option value="<?= $t->id ?>" <?= (in_array($t->id, json_decode($portofolio->teknologi)) ? 'selected' : '') ?>><?= $t->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control rounded-0" required><?= $portofolio->deskripsi ?></textarea>
                    </div>
                </div>
            </div>
            <h3>Daftar Foto</h3>
            <div class="row border row-cols-6 p-2 align-items-end mb-3 ">
                <?php if (json_decode($portofolio->portofolio)) { ?>
                    <?php foreach (json_decode($portofolio->portofolio) as $porto) { ?>
                        <div class="col">
                            <img src="/portofolio/<?= $porto ?>" height="100" alt="" class="img-fluid" style="object-fit: cover; ">
                            <div class="text-center mt-1">
                                <button type="button" class="btn btn-sm btn-outline-danger rounded-0 border-0" modal="delete-alert" target-url="<?= base_url('content/portofolio/delete-foto/' . $portofolio->id . '?foto=' . $porto); ?>" data="Foto"><?= icon('trash') ?></button>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="col-12 text-center">
                        <h3 class="text-muted">Tidak ada foto</h3>
                    </div>
                <?php } ?>
            </div>
            <div class="row mb-2">
                <div class="col-10" id="bungkus">
                    <label for="" class="form-label">Pilih beberapa foto untuk di tambah dalam portofolio</label>
                    <div class="row mb-3">
                        <div class="col-10">
                            <input type="file" class="form-control rounded-0" name="portofolio[]" id="portofolio" accept="image/*">
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="col-2">
                    <button type="button" onclick="addInput()" class="btn btn-outline-success btn-sm rounded-0"><?= icon('plus') ?></button type="button">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary rounded-0"><?= icon('save') ?> Simpan</button>
            </div>
        </form>

    </div>
</div>

<?= $this->section('javascript') ?>
<script>
    $(document).ready(function() {
        $('#teknologi').select2({
            placeholder: 'Pilih Teknologi'
        });
        $('#deskripsi').summernote({
            height: 150,
            placeholder: 'Deskrpsi',
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font'],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });

    function addInput() {
        var bungkus = $('#bungkus');
        var input = bungkus.children('.row').first().clone();
        input.children().children('input#portofolio').val('').prop('required', false);
        var htmlButton = `<button type="button" class="btn btn-outline-danger rounded-0 border-0" onclick="deleteInput(this)"><?= icon("trash") ?></button>`;
        input.children('.col-2').html(htmlButton);
        bungkus.append(input);
    }

    function deleteInput(btn) {
        $(btn).parentsUntil('#bungkus').remove();
    }
</script>
<?= $this->endSection() ?>