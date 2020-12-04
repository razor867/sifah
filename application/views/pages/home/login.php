<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/tambahan.css') ?>">
</head>

<body>
    <article class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-page">
                        <h1 class="title-login mb-4">Welcome back!</h1>
                        <div class="alert alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading"></h4>
                            <p class="alert-content"><?= $infoLogin ?></p>
                        </div>
                        <div class="card shadow">
                            <div class="card-header fontku text-white">
                                Silahkan masuk
                            </div>
                            <div class="card-body">
                                <form method="post" action="">
                                    <div class="form-group">
                                        <label for="username" class="fontku">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="fontku">Password</label>
                                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukkan password" autocomplete="off">
                                    </div>
                                </form>
                                <button id="btnLogin" class="btn btn-green fontku text-white">Login</button>
                                <a href="<?= base_url('home') ?>" class="btn btn-dark fontku text-white">Kembali ke Home</a>
                            </div>
                        </div>
                        <p class="fontku text-center mt-4 mb-2">Segera hubungi admin apabila anda tidak bisa login!</p>
                        <br /><br />
                    </div>
                </div>
            </div>
        </div>
    </article>
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>