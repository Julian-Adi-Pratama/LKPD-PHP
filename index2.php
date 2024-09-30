<?php
$kompensasi = 0;
$jam_mulai = '';
$jam_pulang = '';
$jam_lembur = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $jam_mulai = ($_POST['jam_mulai']);
    $jam_pulang =($_POST['jam_pulang']);

 
    $total_jam_kerja = $jam_pulang - $jam_mulai;

    $jam_lembur = $total_jam_kerja - 8;

    if ($jam_lembur <= 0) {
        $kompensasi = 0;
    } else {
        $kompensasi = 0;
        if ($jam_lembur >= 1) {
            $kompensasi += 50000; 
            $jam_lembur -= 1;
        }
        $kompensasi += $jam_lembur * 25000; 
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan lembur </title>
</head>
<body>
    <h1>Perhitungan lembur Pegawai</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="jam_mulai">Jam Mulai Kerja :</label>
        <input type="number" id="jam_mulai" name="jam_mulai" min="0" max="23" value="<?php echo htmlspecialchars($jam_mulai); ?>" required>
        <br><br>
        <label for="jam_pulang">Jam Pulang Kerja :</label>
        <input type="number" id="jam_pulang" name="jam_pulang" min="0" max="23" value="<?php echo htmlspecialchars($jam_pulang); ?>" required>
        <br><br>
        <input type="submit" value="Hitung Kompensasi">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Hasil Perhitungan uang lembur</h2>
        <p>Jam Mulai Kerja: <?php echo htmlspecialchars($jam_mulai); ?>:00</p>
        <p>Jam Pulang Kerja: <?php echo htmlspecialchars($jam_pulang); ?>:00</p>
        <p>Jumlah Jam Lembur: <?php echo max(0, $jam_pulang - $jam_mulai - 8); ?> jam</p>
        <p>Kompensasi yang diterima pegawai: Rp <?php echo number_format($kompensasi, 0, ',', '.'); ?></p>
    <?php endif; ?>
    </center>
</body>
</html>
