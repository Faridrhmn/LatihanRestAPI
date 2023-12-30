<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container-fluid">
        <h3 class="mt-4 mx-5">Tambah Penerbit</h3>
        <div class="card col-6 mt-4 mx-5">
            <div class="card-header">
                Masukkan data penerbit
            </div>
            <div class="card-body">
                <?php if(validation_errors()): ?>
                    <div class="alert alert-danger pb-0" role="alret">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif ?>
                <form class="row g-3" action="" method="post">
                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Kode Penerbit</label>
                        <input type="text" class="form-control" name="idpenerbit">
                        <div class="form-text text-danger"><?= form_error('id'); ?></div>
                    </div>
                    <div class="col-md-8">
                        <label for="inputPassword4" class="form-label">Nama Penerbit</label>
                        <input type="text" class="form-control" name="namapenerbit">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Kota</label>
                        <input type="text" class="form-control" name="kota">
                    </div>
                    <div class="col-md-6">
                        <label for="inputZip" class="form-label">Telepon</label>
                        <input type="text" class="form-control" name="telp">
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