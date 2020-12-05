<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dahsboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/tambahan.css') ?>">
</head>

<body>
    <article>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="row">
                        <div class="col-md-12 bg-dark header-menu">
                            <h4 class="mt-2 text-white text-center fontku">Menu</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 content-menu">
                            <a href="#" class="list-menu fontku"><span class="icon fontku text-white">></span> Dashboard</a>
                            <a href="#" class="list-menu fontku"><span class="icon fontku text-white">></span> Data Penjualan</a>
                            <a href="#" class="list-menu fontku"><span class="icon fontku text-white">></span> Data Pembelian</a>
                            <a href="#" class="list-menu fontku"><span class="icon fontku text-white">></span> Data Obat</a>
                            <a href="#" class="list-menu fontku"><span class="icon fontku text-white">></span> Data Supplier</a>
                            <a href="#" class="list-menu fontku"><span class="icon fontku text-white">></span> Data Konsumen</a>
                            <a href="<?= base_url('home/logout') ?>" class="list-menu fontku"><span class="icon fontku text-white">></span> Logout</a>
                        </div>
                    </div>
                </div>
                <div class="col-10" style="background-color: #dedfdf;">
                    <div class="row">
                        <div class="col-md-12 bg-green header-dashboard">
                            <h4 class="fontku text-white mt-2">Dashboard</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 header-dashboard">
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <center>
                                        <a href="" class="btn btn-light fontku info">
                                            Total Pembelian<br /><span>90</span>
                                        </a>
                                        <a href="" class="btn btn-light fontku info">
                                            Total Penjualan<br /><span>90</span>
                                        </a>
                                        <a href="" class="btn btn-light fontku info">
                                            Total Obat<br /><span>90</span>
                                        </a>
                                        <a href="" class="btn btn-light fontku info">
                                            Total Supplier<br /><span>90</span>
                                        </a>
                                        <a href="" class="btn btn-light fontku info">
                                            Total Konsumen<br /><span>90</span>
                                        </a>
                                    </center>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-6 mt-2 mb-2">
                                    <div class="card">
                                        <h5 class="card-header">Featured</h5>
                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 mt-2 mb-2">
                                    <div class="card">
                                        <h5 class="card-header">Featured</h5>
                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-4 mt-2 mb-2">
                                    <div class="card">
                                        <h5 class="card-header">Featured</h5>
                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4 mt-2 mb-2">
                                    <div class="card">
                                        <h5 class="card-header">Featured</h5>
                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4 mt-2 mb-2">
                                    <div class="card">
                                        <h5 class="card-header">Featured</h5>
                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</body>

</html>