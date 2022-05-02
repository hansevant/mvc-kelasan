<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= BASEURL ?>"><b>3KA02</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASEURL ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>Mahasiswa">Mahasiswa</a>
                </li>
            </ul>
        </div>

        <?php
        if (isset($_SESSION['login'])) {
            echo '<a href="' . BASEURL . 'Mahasiswa/logout" class="btn btn-outline-light me-2">Log Out</a>';
        } else {
            echo '        
            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            </div>';
        } ?>

    </div>
</nav>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="judulModallogin" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModallogin">Login Admin Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>Mahasiswa/login" method="post">
                    <input required class="form-control my-3" name="username" type="text" placeholder="username">
                    <input required class="form-control my-3" name="password" type="password" placeholder="password">
                    <button type="submit" class="btn btn-dark">Login</button>

                </form>
            </div>
        </div>
    </div>
</div>