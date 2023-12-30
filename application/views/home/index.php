<!DOCTYPE html>
<html lang="en">
<body>
<p class="mt-4 mb-0 mx-5">Cari berdasar nama</p>
        <div class="row g-2 align-items-center mx-5">
            <form class="d-flex col-4" role="search" method="post" action="">
                <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search" name="cari">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="col-10 mt-4 mx-5">
            <h5>List data buku</h5>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Penerbit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach( $buku as $bk ) : ?>
                    <tr>
                    <td><?= $no ?></th>
                    <td><?= $bk['IDBuku'] ?></td>
                    <td><?= $bk['Kategori'] ?></td>
                    <td><?= $bk['NamaBuku'] ?></td>
                    <td><?= $bk['Harga'] ?></td>
                    <td><?= $bk['Stok'] ?></td>
                    <td><?= $bk['Penerbit'] ?></td>
                    </tr>
                    <?php $no+=1; endforeach ?> 
                </tbody>
            </table>
            <?php if(empty($buku)): ?>
                <div class="alert alert-danger">
                    Data buku tidak ditemukan!
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>