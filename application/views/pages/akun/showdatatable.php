<div class="row">
    <div class="col-md-12 mt-2 mb-2">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-dismissible fade show" role="alert" tipe="<?= $tipeFlash ?>">
                    <p class="alert-content"><?= $flash ?></p>
                </div>
                <table class="table table-striped table-bordered dt-responsive nowrap dataDisplay" style="width:100%">
                    <thead id="show-heading-table">
                        <tr>
                            <th>Obat</th>
                            <th>Jenis</th>
                            <th>Kegunaan</th>
                            <th>Expired</th>
                            <th>Stok</th>
                            <th>Harga Satuan</th>
                            <th><a href="#" class="btn btn-dark add" data-toggle="modal" data-target="#showModal"><img src="<?= base_url('assets/img/add.png') ?>" alt="Tambah"> Add</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($link == 'Data Penjualan') {
                        } elseif ($link == 'Data Pembelian') {
                        } elseif ($link == 'Data Obat') {
                            $column1 = 'id_obat';
                            $column2 = 'nama_obat';
                            $column3 = 'jenis_obat';
                            $column4 = 'kegunaan';
                            $column5 = 'tgl_kedaluarsa';
                            $column6 = 'stok';
                            $column7 = 'harga';
                        } elseif ($link == 'Data Supplier') {
                        } else {
                        }
                        foreach ($datafortable as $d) {
                        ?>
                            <tr>
                                <td class="show-datatable"><?= $d->$column2 ?></td>
                                <td class="show-datatable"><?= $d->$column3 ?></td>
                                <td class="show-datatable"><?= $d->$column4 ?></td>
                                <td class="show-datatable"><?= $d->$column5 ?></td>
                                <td class="show-datatable"><?= $d->$column6 ?></td>
                                <td class="show-datatable"><?= $d->$column7 ?></td>
                                <td class="show-datatable">
                                    <a href="#" dataID="<?= $d->$column1 ?>" class="btn btn-warning edit" data-toggle="modal" data-target="#showModal"><img src="<?= base_url('assets/img/edit.png') ?>" alt=""></a> |
                                    <a href="#" class="btn btn-danger delete" data-toggle="modal" data-target="#showModal"><img src="<?= base_url('assets/img/delete.png') ?>" alt=""></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>