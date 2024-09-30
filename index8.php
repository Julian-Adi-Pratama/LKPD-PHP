<?php 
$dataangka = [80,90,75,100,85,100,66];
$angkadicari = 100;

$cari = array_search($angkadicari,$dataangka);
echo " Jumlah angka $angkadicari = " . $cari - 1;

