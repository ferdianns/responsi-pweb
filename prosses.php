<?php
$pesan=$_POST['pesan'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
echo "<head><tittle>Struk pembelian</tittle></head>";
$fp = fopen("pesanan.txt","a+");
fputs ($fp,"$pesan|$nama|$alamat\n");
fclose($fp);

echo "Terima kasih bro<br>";
echo "<a href=keranjang.php>isi</a><br>";
echo "<a href=lihat.php>pesanan koe ni bro :)</a><br>";
?> 