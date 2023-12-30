<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container-fluid">
        <div class="card mt-4 mx-5" style="width: 30rem;">
            <div class="card-body"> 
                <h5 class="card-title"><?= $penerbit['NamaPenerbit'] ?> 
                <a href="<?= base_url(); ?>admin" class="badge text-bg-primary p-2 float-end" style="text-decoration: none;">Kembali</a></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $penerbit['IDPenerbit'] ?></h6>
                <p class="card-text mb-0">Alamat : <?= $penerbit['Alamat'] ?></p>
                <p class="card-text mb-0">Kota : <?= $penerbit['Kota'] ?></p>
                <p class="card-text mb-0">Telepon : <?= $penerbit['Telepon'] ?></p>
            </div>
        </div>
    </div>
</body>
</html>