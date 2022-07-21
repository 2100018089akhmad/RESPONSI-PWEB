<?php  
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$notelp = $_POST['notelp'];
$sewa = $_POST['sewa'];
$jk = $_POST['jk'];
$type = $_POST['type'];
$jenis = $_POST['jenis'];

$fp = fopen("hasil.txt", "a+");
fputs($fp,"REKAP PENYEWAAN RENTAL\n");
fputs($fp,"===============================\n");
fputs($fp,"Nama           : $nama\n");
fputs($fp,"Alamat         : $alamat\n");
fputs($fp,"Email          : $email\n");
fputs($fp,"No Telp        : $notelp\n");
fputs($fp,"Tgl Sewa       : $sewa\n");
fputs($fp,"Jenis Kelamin  : $jk\n");
fputs($fp,"Type Mobil     : $type\n");
fputs($fp,"Jenis          : $jenis\n");
fputs($fp,"===============================\n");
fclose($fp);

echo "Data terkirim";
echo '<a href="Index.html">Kembali</a></br></br>';
 ?>