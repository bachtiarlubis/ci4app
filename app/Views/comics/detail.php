<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">

            <h2 class="mt-2">Comic Detail</h2>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $comic["sampul"]; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $comic["judul"]; ?></h5>
                            <p class="card-text"><b>Penulis :</b> <?= $comic["penulis"]; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit:</b> <?= $comic["penerbit"]; ?></small></p>

                            <a href="" class="btn btn-warning w-25">Edit</a>
                            <a href="<?= base_url('/comics/delete') . '/' . $comic['id']; ?>" class="btn btn-danger w-25">Delete</a>

                            <br>

                            <a href="/comics" class="btn btn-primary mt-2">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>