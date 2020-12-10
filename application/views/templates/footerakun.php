<div class="row">
    <div class="col-md-12 mt-2 bg-dark">
        <p class="fontku text-white mt-4 pl-1">Copyright 2020 Sifah. Karawang Jawa Barat - (41372)</p>
    </div>
</div>
</div>
</div>
</div>
</article>
<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="form-aksi">
                    <div class="form-obat">
                        <div class="form-group">
                            <input type="text" id="id-obat" name="idobat" hidden>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="namaobat">Nama Obat</label>
                                <input type="text" class="form-control" id="namaobat" name="namaobat" placeholder="Nama Obat">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jenis">Jenis</label>
                                <select class="form-control" name="jenis" id="jenis">
                                    <option value="">Jenis Obat</option>
                                    <option value="cair">Cair</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="pil">Pil</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="kegunaan">Kegunaan</label>
                                <input type="text" class="form-control" id="kegunaan" name="kegunaan" placeholder="Kegunaan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="expired">Expired</label>
                                <input type="date" class="form-control" id="expired" name="expired" placeholder="Expired">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="stok">Stok</label>
                                <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hargasatuan">Harga Satuan</label>
                                <input type="number" class="form-control" id="hargasatuan" name="hargasatuan" placeholder="Harga Satuan">
                            </div>
                        </div>
                    </div>
                    <div class="form-datajualbeli">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="namaobat">Nama Obat</label>
                                <input type="text" class="form-control" id="namaobat" name="namaobat" placeholder="Nama Obat">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tanggaljualbeli" class="tgl-jualbeli">Tanggal</label>
                                <input type="date" class="form-control" id="tanggaljualbeli" name="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="net">Net</label>
                                <input type="number" class="form-control" id="net" name="net" placeholder="Net">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="totaljualbeli" class="total-jualbeli">Total</label>
                                <input type="number" class="form-control" id="totaljualbeli" name="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="konsumendansupplier" class="konsup"></label>
                                <input type="text" class="form-control" id="konsumendansupplier" name="" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="form-suppmen">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="suppmen" class="supp-men">Konsumen</label>
                                <input type="text" class="form-control" id="suppmen" name="" placeholder="">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary aksi"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
<script src="<?= base_url('assets/js/script.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/DataTables/datatables.min.js') ?>"></script>

<script>
    $(document).ready(function() {
        $('.dataDisplay').DataTable();
    });
</script>
</body>

</html>