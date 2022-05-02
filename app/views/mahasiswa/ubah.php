<div class="container">
    <div class="row py-4">
        <div class="col-md-5">
            <h3><?= $data['judul']; ?></h3>
            <form action="<?= BASEURL ?>/mahasiswa/ubah" method="post">
                <input required class="form-control my-3" name="id" type="text" value="<?= $data['mhs']['id'] ?>" hidden>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Nama</span>
                    <input required class="form-control" name="name" type="text" value="<?= $data['mhs']['name'] ?>" placeholder="Nama Lengkap">
                </div>
                <div class="input-group flex-nowrap my-3">
                    <span class="input-group-text" id="addon-wrapping">Email</span>
                    <input class="form-control" name="email" type="email" value="<?= $data['mhs']['email'] ?>" placeholder="Masukkan Email">
                </div>
                <select required class="form-select my-3" name="status" aria-label="Default select example">
                    <option disabled selected value>Status</option>
                    <option value="Aktif">Akif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                    <option value="Transfer">Transfer</option>
                </select>
                <div class="modal-footer">
                    <a href="javascript:history.back()">
                        <button type="button" class="btn btn-secondary">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-dark">Ubah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>