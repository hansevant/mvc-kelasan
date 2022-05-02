<div class="container pt-5">

    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card bg-light text-center">
                <div class="card-body">
                    <h1 class="card-title py-1 text-center">Total Mahasiswa</h1>
                    <h1 class="card-text pb-3"><?= $data['mhs'][0]; ?></h1>
                    <a href="<?= BASEURL ?>Mahasiswa" class="btn btn-secondary">Lihat Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 justify-content-around">
        <div class="col-md-4">

            <div class="card bg-light text-center">
                <div class="card-body">
                    <i class="fa fa-mars fa-5x"></i>
                    <h1 class="pb-1">Laki-laki : <?= $data['mhscowo'][0]; ?></h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="card bg-light text-center">
                <div class="card-body">
                    <i class="fa fa-venus fa-5x"></i>
                    <h1 class="pb-1" style="">Perempuan : <?= $data['mhscewe'][0]; ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>