
    <form action="" method="POST">
        <input type="number" name="angka1" placeholder="angka 1" required>
        <input type="number" name="angka2" placeholder="angka 2" required>
        <button type="submit">Jumlahkan</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Mengambil nilai dari input
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];

        // Melakukan penjumlahan
        $hasil = $angka1 + $angka2;

        // Menampilkan hasil
        echo "<h2>Hasil: $hasil</h2>";
    }
    ?>
