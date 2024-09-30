<?php
function hitungUsia(array $usia) {
    $anak = 0;
    $dewasa = 0;

    foreach ($usia as $umur) {
        if ($umur < 17) {
            $anak++;
        } else {
            $dewasa++;
        }
    }

    return [
        'anak' => $anak,
        'dewasa' => $dewasa
    ];
}

$usiaSiswa = [15, 18, 12, 20, 17];
$hasil = hitungUsia($usiaSiswa);
echo "List Usia : " . implode(', ', $usiaSiswa) . "<br>";
echo "Jumlah anak: " . $hasil['anak'] . "<br>";
echo "Jumlah dewasa: " . $hasil['dewasa'] . "<br>";

?>