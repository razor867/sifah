<div class="row">
    <div class="col-md-12 mt-2 mb-2">
        <div class="card">
            <div class="card-body">
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
                        // foreach ($data as $d) {
                        ?>
                        <tr>
                            <td class="show-datatable"></td>
                            <td class="show-datatable"></td>
                            <td class="show-datatable"></td>
                            <td class="show-datatable"></td>
                            <td class="show-datatable"></td>
                            <td class="show-datatable"></td>
                            <td class="show-datatable">
                                <a href="#" class="btn btn-warning edit" data-toggle="modal" data-target="#showModal"><img src="<?= base_url('assets/img/edit.png') ?>" alt=""></a> |
                                <a href="#" class="btn btn-danger delete" data-toggle="modal" data-target="#showModal"><img src="<?= base_url('assets/img/delete.png') ?>" alt=""></a>
                            </td>
                        </tr>
                        <?php  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>