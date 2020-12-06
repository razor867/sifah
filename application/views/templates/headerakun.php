<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dahsboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/tambahan.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/DataTables/datatables.min.css') ?>">
</head>

<body>
    <article>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 fixed-top">
                    <div class="row">
                        <div class="col-md-12 bg-dark header-menu">
                            <h4 class="mt-2 text-white text-center fontku">Menu</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 content-menu">
                            <a href="<?= base_url('akun/dashboard') ?>" class="list-menu fontku"><img class="icon-list-menu" src="<?= base_url('assets/img/chevron-black.png') ?>" alt="chevron">Dashboard</a>
                            <a href="<?= base_url('akun/dataPenjualan') ?>" class="list-menu fontku"><img class="icon-list-menu" src="<?= base_url('assets/img/chevron-black.png') ?>" alt="chevron">Data Penjualan</a>
                            <a href="<?= base_url('akun/dataPembelian') ?>" class="list-menu fontku"><img class="icon-list-menu" src="<?= base_url('assets/img/chevron-black.png') ?>" alt="chevron">Data Pembelian</a>
                            <a href="<?= base_url('akun/obat') ?>" class="list-menu fontku"><img class="icon-list-menu" src="<?= base_url('assets/img/chevron-black.png') ?>" alt="chevron">Data Obat</a>
                            <a href="<?= base_url('akun/supplier') ?>" class="list-menu fontku"><img class="icon-list-menu" src="<?= base_url('assets/img/chevron-black.png') ?>" alt="chevron">Data Supplier</a>
                            <a href="<?= base_url('akun/konsumen') ?>" class="list-menu fontku"><img class="icon-list-menu" src="<?= base_url('assets/img/chevron-black.png') ?>" alt="chevron">Data Konsumen</a>
                            <a href="<?= base_url('home/logout') ?>" class="list-menu fontku"><img class="icon-list-menu" src="<?= base_url('assets/img/chevron-black.png') ?>" alt="chevron"> Logout</a>
                        </div>
                    </div>
                </div>
                <div class="col-10" style="background-color: #dedfdf;">
                    <div class="row">
                        <div class="col-md-12 bg-green header-dashboard">
                            <h4 class="fontku text-white mt-2 hal"><?= $link ?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 header-dashboard" style="min-height: 100vh;">
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