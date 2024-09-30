<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Angka</title>
    <style>
        form {
            display: fle;
        }
    </style>
</head>
<body>
    <center>
    <h1>Mengecek Angka</h1>
    <form action="index1.php" method="POST">
        <label for="teksdicek">Teks:</label>
        <input type="text" id="teksdicek" name="teksdicek" required>
        <br><br>
        <input type="submit" value="Cek Teks">
    </form>
</body>

</html>

<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teks = $_POST["teksdicek"];
    cekAngka($teks);
}
function cekAngka($teks)
{

    preg_match_all('/\d/', $teks, $angkadidapat);
    
    if (!empty($angkadidapat[0])) {
        $angka = implode(', ', $angkadidapat[0]);
        echo "Teks mengandung angka: $angka";
    } else {
        echo "Teks tidak terdapat angka";
    }
}

?>
 </center>