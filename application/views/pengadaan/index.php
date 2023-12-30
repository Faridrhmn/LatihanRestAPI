<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container-fluid">
        <div class="card mt-4 mx-5" style="width: 30rem;">
            <div class="card-body"> 
                <h5 class="card-title"><?= $buku['NamaBuku'] ?> / <?= $buku['Penerbit'] ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Sisa stok : <?= $buku['Stok'] ?></h6>
                <p class="card-text">Dibutuhkan segera buku tersebut karena stok menipis dan kebutuhan meningkat.</p>
            </div>
        </div>
    </div>
</body>
</html>