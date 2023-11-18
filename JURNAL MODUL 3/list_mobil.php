<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <br>
            <h1 class="fw-semibold fst-italic text-center"><b>LIST MOBIL</b></h1>
            <br>
            <table class="table table-dark table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Brand Mobil</th>
                        <th scope="col">Warna Mobil</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">Harga Mobil</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("connect.php");

                    // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
                    $selectquery = mysqli_query($connect, "SELECT * FROM showroom_mobil");
                    
                    // Buatlah perkondisian dimana: 
                    // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
                    //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
                    if (mysqli_num_rows($selectquery) > 0) {
                        while($Select = mysqli_fetch_assoc($selectquery)) {
                    ?>
                    <tr>
                        <th scope="row"><?= $Select['id']?></th>
                        <td><?= $Select['nama_mobil']?></td>
                        <td><?= $Select['brand_mobil']?></td>
                        <td><?= $Select['warna_mobil']?></td>
                        <td><?= $Select['tipe_mobil']?></td>
                        <td><?= $Select['harga_mobil']?></td>
                        <td>
                        <!-- <p class="d-inline-flex gap-1"> -->
                            <a href="form_detail_mobil.php" class="btn btn-primary">Detail</a>
                        <!-- </p> -->
                        </td>
                    </tr>
                    <?php
                            }
                        } else {
                        echo "0 results";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </center>
</body>
</html>