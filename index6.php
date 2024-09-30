<?php
// function hitungratarata(array $angka) {

//     $jumlah = array_sum($angka);

//     $jumlahAngka = count($angka);

//     $rataRata = $jumlah / $jumlahAngka;

//     return $rataRata;
// }
// $namasiswa1 = "Andi";
// $nilaiSiswa1 = [80, 78, 82, 78, 88];
// $rataRataNilai1 = hitungratarata($nilaiSiswa1);

// echo "Rata-rata nilai $namasiswa1 adalah: " . $rataRataNilai1;
// echo "<br><br>";

// $namasiswa2 = "Beni";
// $nilaiSiswa2 = [86, 70, 80, 85, 81];
// $rataRataNilai2 = hitungratarata($nilaiSiswa2);

// echo "Rata-rata nilai $namasiswa2 adalah: " . $rataRataNilai2;
// echo "<br><br>";

// $namasiswa3 = "Dani";
// $nilaiSiswa3 = [83, 91, 70, 73, 81];
// $rataRataNilai3 = hitungratarata($nilaiSiswa3);

// echo "Rata-rata nilai $namasiswa3 adalah: " . $rataRataNilai3;
// echo "<br><br>";

// $namasiswa4 = "Eko";
// $nilaiSiswa4 = [89, 85, 84, 86, 88];
// $rataRataNilai4 = hitungratarata($nilaiSiswa4);

// echo "Rata-rata nilai $namasiswa4 adalah: " . $rataRataNilai4;
// echo "<br><br>";
 
    $student = [
        [
            'nama'=> 'rahmat',
            'nilai'=> [80, 78, 82, 78, 88]
        ],
        [
            'nama'=> 'yaya',
            'nilai'=> [86, 70, 80, 85, 81]
        ],
        [
            'nama'=> 'alex',
            'nilai'=> [83, 91, 70, 73, 81]
        ],
        [
            'nama'=> 'prio',
            'nilai'=> [89, 85, 84, 86, 88]
        ],
        ];
        echo '<tr><th>Nama</th><th>Rata-rata</th></tr>';

        foreach ($student as $s){
            $nilai = implode(',', $s['nilai']);
            $rataRata=array_sum($s['nilai']) / count($s['nilai']);

            echo '<tr>';
        echo '<br>';
        echo '<td>' . htmlspecialchars($s['nama']) . '</td>';
        echo '<td>' . number_format($rataRata, 2) . '</td>';
        echo '</tr>';
        }
    ?>