<!DOCTYPE html>
<body>
    <div class="container-fluid">
        <h3 class="mt-4 mx-5">Edit Penerbit</h3>
        <div class="card col-6 mt-4 mx-5">
            <div class="card-header">
                Masukkan perubahan data penerbit
            </div>
            <div class="card-body">
                <form class="row g-3" action="" method="post">
                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Kode Penerbit</label>
                        <input class="form-control" type="text" value="<?= $penerbit['IDPenerbit'] ?>" aria-label="Disabled input example" name="idpenerbit" readonly>
                    </div>
                    <div class="col-md-8">
                        <label for="inputPassword4" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="namapenerbit" value="<?= $penerbit['NamaPenerbit'] ?>">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?= $penerbit['Alamat'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Kota</label>
                        <input type="text" class="form-control" name="kota" value="<?= $penerbit['Kota'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputZip" class="form-label">Telepon</label>
                        <input type="text" class="form-control" name="telp" value="<?= $penerbit['Telepon'] ?>">
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