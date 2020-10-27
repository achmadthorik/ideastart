<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Contact Us</h2>
            <table class="table">
                <thead>
                    <th>Tipe</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                </thead>
                <?php foreach ($alamat as $a) : ?>
                    <tbody>

                        <tr>
                            <td><?= $a['tipe']; ?></td>
                            <td><?= $a['alamat']; ?></td>
                            <td><?= $a['kota']; ?></td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
            </table>


        </div>
    </div>
</div>
<?= $this->endSection(); ?>