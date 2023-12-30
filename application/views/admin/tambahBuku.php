<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container-fluid">
        <h3 class="mt-4 mx-5">Tambah Buku</h3>
        <div class="card col-6 mt-4 mx-5">
            <div class="card-header">
                Masukkan data buku
            </div>
            <div class="card-body">
                <form class="row g-3" action="" method="POST">
                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Kode Buku</label>
                        <input type="type" class="form-control" name="idBuku">
                        <div class="form-text text-danger"><?= form_error('idBuku'); ?></div>
                    </div>
                    <div class="col-md-8">
                        <label for="inputPassword4" class="form-label">Kategori</label>
                        <input type="text" class="form-control" name="kategori">
                        <div class="form-text text-danger"><?= form_error('kategori'); ?></div>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" name="namabuku">
                        <div class="form-text text-danger"><?= form_error('namabuku'); ?></div>
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga">
                        <div class="form-text text-danger"><?= form_error('harga'); ?></div>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Stok</label>
                        <input type="text" class="form-control" name="stok">
                        <div class="form-text text-danger"><?= form_error('stok'); ?></div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Penerbit</label>
                        <select id="inputState" class="form-select" name="pilihan">
                        <option selected>Pilih</option>
                        <?php foreach($penerbit as $pb): ?>
                        <option value="<?= $pb['NamaPenerbit'] ?>"><?= $pb['NamaPenerbit'] ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary float-end">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>