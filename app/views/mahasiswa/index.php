<div class="container mt-5">

    <div class="row">
        <div class="col-md-6">
            <?php Flasher::flash() ?>
        </div>

        <?php
        if (isset($_SESSION['login'])) {
            echo '        <div class="row mb-4">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-light border-dark shadow" data-bs-toggle="modal" data-bs-target="#formModal">
                                        Tambah Data Mahasiswa
                                    </button>
                                </div>
                            </div>';
        }
        ?>


        <div class="row">
            <div class="col-md-6">
                <form action="<?= BASEURL ?>Mahasiswa/cari" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="addon-wrapping">Cari Mahasiswa</span>
                        <input type="text" class="form-control" placeholder="Masukkan nama atau npm" name="keyword" id="keyword" autocomplete="off">
                        <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">

                <h3><?= $data['judul']; ?> 3KA02</h3>
                <div class="my-3">
                    <div class="btn-group float-end dropend">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            Filter Mahasiswa
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                            <li><a class="dropdown-item" href="<?= BASEURL; ?>Mahasiswa/cariAktif">Aktif</a></li>
                            <li><a class="dropdown-item" href="<?= BASEURL; ?>Mahasiswa/cariTidakAktif">Tidak Aktif</a></li>
                            <li><a class="dropdown-item" href="<?= BASEURL; ?>Mahasiswa/cariTransfer">Transfer</a></li>
                            <li><a class="dropdown-item" href="<?= BASEURL; ?>Mahasiswa/cariCowo">Laki-laki</a></li>
                            <li><a class="dropdown-item" href="<?= BASEURL; ?>Mahasiswa/cariCewe">Perempuan</a></li>
                        </ul>
                    </div>
                    <a href="<?= BASEURL ?>Mahasiswa/index" class="btn btn-outline-dark">Reset</a>
                </div>

                <?php foreach ($data['mhs'] as $mhs) : ?>

                    <ul class="list-group">
                        <li class="list-group-item"><?= $mhs['name']; ?>

                            <?php
                            if (isset($_SESSION['login'])) {
                                echo '<a href="' . BASEURL . 'Mahasiswa/hapus/' . $mhs['id'] . '" onclick="return confirm(\'r u sure?\')">
                                <span class="badge bg-dark text-light float-end">Hapus</span>
                            </a>

                            <a href="#" style="pointer-events: none;cursor: default;">
                                <span class="badge bg-none float-end"> </span>
                            </a>';
                            }
                            ?>

                            <?php
                            if (isset($_SESSION['login'])) {
                                echo '<a href="' . BASEURL . 'Mahasiswa/beforeUbah/' . $mhs['id'] . '">
                                <span class="badge bg-secondary text-light float-end" data-bs-toggle="modal" data-bs-target="#formModal">Ubah</span>
                            </a>

                            <a href="#" style="pointer-events: none;cursor: default;">
                                <span class="badge bg-none float-end"> </span>
                            </a>';
                            }
                            ?>

                            <a href="<?= BASEURL; ?>Mahasiswa/detail/<?= $mhs['id'] ?>">
                                <span class="badge bg-light text-dark float-end">Detail</span>
                            </a>
                        </li>
                        <!-- <li class="list-group-item"><?= $mhs['npm']; ?></li>
                        <li class="list-group-item"><?= $mhs['email']; ?></li>
                        <li class="list-group-item"><?= $mhs['major']; ?></li> -->
                    </ul>
                <?php endforeach ?>

            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>

    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>Mahasiswa/tambah" method="post">
                        <input required class="form-control my-3" name="name" type="text" placeholder="Nama Lengkap">
                        <input required class="form-control my-3" name="npm" type="number" placeholder="NPM">
                        <input class="form-control my-3" name="email" type="email" placeholder="Email">
                        <label for="" class="mb-3">Jenis Kelamin : </label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="Laki-laki" value="Laki-laki">
                            <label class="form-check-label" for="Laki-laki">laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="perempuan" value="Perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                        <select required class="form-select my-3" name="status" aria-label="Default select example">
                            <option disabled selected value>Status</option>
                            <option value="Aktif">Akif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                            <option value="Transfer">Transfer</option>
                        </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-dark">Tambah Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>