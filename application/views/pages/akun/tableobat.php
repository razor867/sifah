<div>
    <?php
    foreach ($datafortable as $d) {
    ?>
        <tr>
            <td><?= $d->nama_obat ?></td>
            <td><?= $d->jenis_obat ?></td>
            <td><?= $d->kegunaan ?></td>
            <td><?= $d->tgl_kedaluarsa ?></td>
            <td><?= $d->stok ?></td>
            <td><?= $d->harga ?></td>
            <td>
                <a href="#" dataID="<?= $d->id_obat ?>" class="btn btn-warning edit" data-toggle="modal" data-target="#showModal"><img src="<?= base_url('assets/img/edit.png') ?>" alt=""></a> |
                <a href="#" dataID="<?= $d->id_obat ?>" class="btn btn-danger delete" data-toggle="modal" data-target="#showModal"><img src="<?= base_url('assets/img/delete.png') ?>" alt=""></a>
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