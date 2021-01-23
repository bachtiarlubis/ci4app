<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt rerum magni ea eius quibusdam consequatur, harum quos est inventore fuga consectetur sed optio officiis doloribus accusantium numquam expedita odio tempore?</p>
            <br>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><?= $a["tipe"]; ?></li>
                    <li><?= $a["alamat"]; ?></li>
                    <li><?= $a["kota"]; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>