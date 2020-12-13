<div>
    <?php
    foreach ($datafortable as $d) {
    ?>
        <tr>
            <td><?= $d->nama_supplier ?></td>
            <td>
                <a href="#" dataID="<?= $d->id_supplier ?>" class="btn btn-warning edit" data-toggle="modal" data-target="#showModal"><img src="<?= base_url('assets/img/edit.png') ?>" alt=""></a> |
                <a href="#" dataID="<?= $d->id_supplier ?>" class="btn btn-danger delete" data-toggle="modal" data-target="#showModal"><img src="<?= base_url('assets/img/delete.png') ?>" alt=""></a>
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