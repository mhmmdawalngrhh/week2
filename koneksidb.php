<?php
error_reporting(1);
 
//DATABASE PERTAMA
$db_host1 = 'localhost';
$db_user1 = 'root';
$db_pass1 = '';
$database1 = 'db_surat_duy';
 
// Buat Koneksinya
$db1 = new mysqli($db_host1, $db_user1, $db_pass1, $database1);
 
// Cek koneksi *BISA SOBAT HAPUS NANTINYA 
if ($db1->connect_error) { 
	die("<b>Yahh! Koneksi Database pertama 'db_surat_duy' gagal</b> : " . mysqli_connect_error()); 
} else { 
	echo "<b>Hore! Koneksi Database pertama 'db_surat_duy' Berhasil</b>"; 
}
 
echo "<br><br><br>";
 
// ------------------------------------------------------------------------------- \\
 
////DATABASE KEDUA
$db_host2 = 'localhost';
$db_user2 = 'root';
$db_pass2 = '';
$database2 = 'db_surat_duy';
 
// Buat Koneksinya
$db2 = new mysqli($db_host2, $db_user2, $db_pass2, $database2);
 
// Cek koneksi *BISA SOBAT HAPUS NANTINYA 
if ($db2->connect_error) { 
	die("<b>Yahh! Koneksi Database pertama 'db_surat_duy' gagal</b> : " . mysqli_connect_error()); 
} else { 
	echo "<b>Hore! Koneksi Database pertama 'db_surat_duy' Berhasil</b>"; }

?>