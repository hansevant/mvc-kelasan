<div class="container mt-5">
    <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header"><?= $data['mhs']['npm']; ?></div>
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['name']; ?></h5>
            <p class="card-text"><?= $data['mhs']['gender']; ?></p>
            <p class="card-text"><?= $data['mhs']['email']; ?></p>
            <p class="card-text">Status Mahasiswa <?php if ($data['mhs']['status'] == 'Aktif') {
                                                        echo '<b><span class="text-success">' . $data['mhs']['status'] . '</span></b>';
                                                    } elseif ($data['mhs']['status'] == 'Tidak Aktif') {
                                                        echo '<b><span class="text-danger">' . $data['mhs']['status'] . '</span></b>';
                                                    } else {
                                                        echo '<b><span class="text-warning">' . $data['mhs']['status'] . '</span></b>';
                                                    }
                                                    ?></p>
            <a href="<?= BASEURL; ?>/Mahasiswa" class="btn btn-light shadow">Kembali</a>
        </div>
    </div>
</div>