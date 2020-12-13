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
                    <tbody class="show-datatable">