<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container-fluid">
        <h3 class="mt-4 mx-5">Edit Buku</h3>
        <div class="card col-6 mt-4 mx-5">
            <div class="card-header">
                Masukkan perubahan data buku
            </div>
            <div class="card-body">
                <form class="row g-3" action="" method="post">
                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Kode Buku</label>
                        <input class="form-control" type="text" value="<?= $buku['IDBuku'] ?>" name="idBuku" aria-label="Disabled input example" readonly>
                    </div>
                    <div class="col-md-8">
                        <label for="inputPassword4" class="form-label">Kategori</label>
                        <input type="text" class="form-control" value="<?= $buku['Kategori'] ?>" name="kategori">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" value="<?= $buku['NamaBuku'] ?>" name="namabuku">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">Harga</label>
                        <input type="number" class="form-control" value="<?= $buku['Harga'] ?>" name="harga">
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Stok</label>
                        <input type="number" class="form-control" value="<?= $buku['Stok'] ?>" name="stok">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Penerbit</label>
                        <select id="inputState" class="form-select" name="pilihan">
                        <option selected><?= $buku['Penerbit'] ?></option>
                        <?php foreach($penerbit as $pb): ?>
                        <option value="<?= $pb['NamaPenerbit'] ?>"><?= $pb['NamaPenerbit'] ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>