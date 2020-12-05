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
                                        <div class="card-header">
                                            <h5 class="fontku text-white" style="display: inline;">Data Pembelian</h5>
                                            <a href="#" class="btn btn-dark float-right">Details</a>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered dt-responsive nowrap dataDisplay" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Obat</th>
                                                        <th>Tanggal Beli</th>
                                                        <th>Net</th>
                                                        <th>Harga Satuan</th>
                                                        <th>Total Harga</th>
                                                        <th>Supplier</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger</td>
                                                        <td>Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garrett</td>
                                                        <td>Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 mt-2 mb-2">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="fontku text-white" style="display: inline;">Data Penjualan</h5>
                                            <a href="#" class="btn btn-dark float-right">Details</a>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered dt-responsive nowrap dataDisplay" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Obat</th>
                                                        <th>Tanggal Jual</th>
                                                        <th>Net</th>
                                                        <th>Harga Satuan</th>
                                                        <th>Total Harga</th>
                                                        <th>Konsumen</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger</td>
                                                        <td>Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garrett</td>
                                                        <td>Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="fontku text-white" style="display: inline;">Data Obat</h5>
                                            <a href="#" class="btn btn-dark float-right">Details</a>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered dt-responsive nowrap dataDisplay" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Obat</th>
                                                        <th>Jenis</th>
                                                        <th>Kegunaan</th>
                                                        <th>Expired</th>
                                                        <th>Stok</th>
                                                        <th>Harga Satuan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger</td>
                                                        <td>Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garrett</td>
                                                        <td>Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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