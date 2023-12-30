<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container-fluid">
        <?php if($this->session->flashdata('flash') ): ?>
        <div class="alert alert-success alert-dismissible fade show mx-5" role="alert">
            <strong><?= $this->session->flashdata('flash'); ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <div class="row mt-4 mx-5">
            <div class="col">
                <div class="col-10">
                    <table class="table col-9">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Buku</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $no=1; foreach($buku as $bk):  ?>
                            <tr>
                            <td><?= $no ?></td>
                            <td><?= $bk['NamaBuku'] ?>
                            <a href="<?= base_url(); ?>Admin/hapusBuku/<?= $bk['IDBuku'] ?>" class="badge text-bg-danger p-2 rounded-pill float-end" style="text-decoration: none;" onclick="return confirm('yakin?');">Hapus</a>
                            <a href="<?= base_url(); ?>Admin/editBuku/<?= $bk['IDBuku'] ?>" class="badge text-bg-warning p-2 mx-2 rounded-pill float-end" style="text-decoration: none;">Edit</a>
                            <a href="<?= base_url(); ?>Admin/detailBuku/<?= $bk['IDBuku'] ?>" class="badge text-bg-success p-2 rounded-pill float-end" style="text-decoration: none;">Detail</a>
                            </td>
                            </tr>
                            <?php $no+=1; endforeach ?>
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>Admin/tambahBuku" class="btn btn-primary float-end">Tambah Buku</a>
                </div>
            </div>
            <div class="col">
            <div class="col-10">
                    <table class="table col-9">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Penerbit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $nl=1; foreach($penerbit as $pb):  ?>
                            <tr>
                            <td><?= $nl ?></td>
                            <td><?= $pb['NamaPenerbit'] ?>
                            <a href="<?= base_url(); ?>Admin/hapusPenerbit/<?= $pb['IDPenerbit'] ?>" class="badge text-bg-danger p-2 rounded-pill float-end" style="text-decoration: none;" onclick="return confirm('yakin?');">Hapus</a>
                            <a href="<?= base_url(); ?>Admin/editPenerbit/<?= $pb['IDPenerbit'] ?>" class="badge text-bg-warning p-2 mx-2 rounded-pill float-end" style="text-decoration: none;">Edit</a>
                            <a href="<?= base_url(); ?>Admin/detailPenerbit/<?= $pb['IDPenerbit'] ?>" class="badge text-bg-success p-2 rounded-pill float-end" style="text-decoration: none;">Detail</a>
                            </td>
                            </tr>
                            <?php $nl+=1; endforeach ?>
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>Admin/tambahPenerbit" class="btn btn-primary float-end">Tambah Penerbit</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>