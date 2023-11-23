<!-- File ini berisi koneksi dengan database MySQL -->

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
<?php 
$db = mysqli_connect('localhost','root','','modul4_wad');
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$db) {
    die("Koneksi tidak terhubung: " . mysqli_connect_error());
}
// 
 
?>