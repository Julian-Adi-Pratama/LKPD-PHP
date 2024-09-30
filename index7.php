 <?php
 function bandingkanNama($nama1, $nama2) {
    $jumlahKarakter1 = strlen($nama1);
    $jumlahKarakter2 = strlen($nama2);

    if ($jumlahKarakter1 > $jumlahKarakter2) {
        $namaLebihPanjang = $nama1;
        $namaLebihPendek = $nama2;
        $selisih = $jumlahKarakter1 - $jumlahKarakter2;
    } else if ($jumlahKarakter2 > $jumlahKarakter1) {
        $namaLebihPanjang = $nama2;
        $namaLebihPendek = $nama1;
        $selisih = $jumlahKarakter2 - $jumlahKarakter1;
    } else {
        return "Kedua nama memiliki jumlah karakter yang sama.";
    }

    return " $namaLebihPanjang memiliki jumlah karakter lebih banyak dari $namaLebihPendek dan selisih hurufnya adalah :  $selisih huruf";
}

$namaA = "yadi";
$namaB = "rahmat";

$hasil = bandingkanNama($namaA, $namaB);
echo $hasil;
?>