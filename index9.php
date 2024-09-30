<?php
function hitungPecahanUang(int $jumlahUang){
    $pecahan = [100000, 75000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
    $hasil = [];

    foreach ($pecahan as $nilaiPecahan) {
        $jumlahLembar = intval($jumlahUang / $nilaiPecahan);
        $hasil[$nilaiPecahan] = $jumlahLembar;
        $jumlahUang -= $jumlahLembar * $nilaiPecahan;
    }
    return $hasil;
}
$jumlahUang = 150000;
$hasilHitung = hitungPecahanUang($jumlahUang);
echo "Uang : $jumlahUang " . "<br>";
foreach ($hasilHitung as $pecahan => $jumlah) {
    if ($jumlah > 0) {
    echo $jumlah . " lembar " . "Rp. ". number_format($pecahan) . "<br>";   
    }
}
?>