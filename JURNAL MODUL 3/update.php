<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
    include('connect.php');

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET['id'];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        if(isset($_POST['ubah'])) {
            $id = $id;
            $nama_mobil = $_POST['nama_mobil'];
            $brand_mobil = $_POST['brand_mobil'];
            $warna_mobil = $_POST['warna_mobil'];
            $tipe_mobil = $_POST['tipe_mobil'];
            $harga_mobil = $_POST['harga_mobil'];
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
            $update = "UPDATE showroom_mobil SET nama_mobil='$nama_mobil', brand_mobil='$brand_mobil', warna_mobil='$warna_mobil', tipe_mobil='$tipe_mobil', harga_mobil='$harga_mobil' WHERE id=$id";        
        // Eksekusi perintah SQL
            $updateData = mysqli_query($connect, $update);
        // Buatkan kondisi jika eksekusi query berhasil
        if (mysqli_query($connect, $update)) {
            echo "Data has changed SUCCESSFULY";
        }
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        else {
            echo "Data FAILED changed" . mysqli_error($connect);
        }
    }
    // Panggil fungsi update dengan data yang sesuai
    $data = [
        'id' => $id,
        'nama_mobil' => $_POST['nama_mobil'], 
        'brand_mobil' => $_POST['brand_mobil'],
        'warna_mobil' => $_POST['warna_mobil'],
        'tipe_mobil' => $_POST['tipe_mobil'],
        'harga_mobil' => $_POST['harga_mobil']  
    ];
    
    function update($connect, $data){
        $nama = $data['nama_mobil'];
        $brand = $data['brand_mobil'];
        $warna = $data['warna_mobil'];
        $tipe = $data['tipe_mobil'];
        $harga = $data['harga_mobil'];
        $id = $data['id'];
        $updatesql = "UPDATE mobil SET nama='$nama', brand='$brand', warna='$warna', tipe='$tipe', harga='$harga' WHERE id='$id'";
        mysqli_query($connect, $updatesql);
    }
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($connect);
?>