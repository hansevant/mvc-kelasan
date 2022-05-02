<div class="container py-4">
    <h1>My Page</h1>
    <br>
    <img class="shadow rounded-square mb-3" src="<?= BASEURL ?>/assets/img/profile.jpeg" alt="Tebak hayoo?">
    <p>Halo ini <?= $data['nama']; ?>, pekerjaannya <?= $data['pekerjaan']; ?> dan umur dia <?= $data['umur']; ?> tahun.</p>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ...
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Untuk mengubah teks diatas,</strong>
                    tambahkan sebuah parameter untuk url diatas, Contoh
                    <code>/nama/pekerjaan/umur</code>, maka teks akan berubah menjadi <em>Halo ini nama, pekerjaannya pekerjaan dan umur dia umur tahun.</em> Hanya bisa 3 paramater jika kurang dari 3 maka akan diubah menjadi parameter default seperti sebelumnya.
                </div>
            </div>
        </div>
    </div>

</div>