<div>
    <?php
    foreach ($datafortable as $d) {
    ?>
        <tr>
            <td><?= $d->nama_obat ?></td>
            <td><?= $d->tgl_jual ?></td>
            <td><?= $d->net ?></td>
            <td><?= $d->total_jual ?></td>
            <td><?= $d->nama_konsumen ?></td>
            <td>
                <a href="#" dataID="<?= $d->id_penjualan ?>" class="btn btn-warning edit" data-toggle="modal" data-target="#showModal"><img src="<?= base_url('assets/img/edit.png') ?>" alt=""></a> |
                <a href="#" dataID="<?= $d->id_penjualan ?>" class="btn btn-danger delete" data-toggle="modal" data-target="#showModal"><img src="<?= base_url('assets/img/delete.png') ?>" alt=""></a>
            </td>
        </tr>
    <?php } ?>
</div>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>