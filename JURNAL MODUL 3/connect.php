<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $nama_database = "modul3_wad";
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$connect = mysqli_connect($host, $username, $password, $nama_database);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($connect -> connect_error)
{
    die("Unable to connect");
}

// 
?>