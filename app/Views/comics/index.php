<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Comics List</h1>
            <a href="<?= base_url('comics/create'); ?>" class="btn btn-primary mb-3">Add Comic</a>

            // Cek Flash Data
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>
                        <?= session()->getFlashdata('pesan'); ?>
                    </strong>
                </div>
            <?php endif; ?>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    <?php foreach ($comic as $c) : ?>
                        <tr>
                            <th scope="row"><?= ++$i; ?></th>
                            <td>
                                <img src="/img/<?= $c["sampul"]; ?>" alt="<?= url_title($c["judul"], " ", true); ?>" class="sampul">
                            </td>
                            <td><?= $c["judul"]; ?></td>
                            <td>
                                <a href="/comics/<?= $c["slug"]; ?>" class="btn btn-warning">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>