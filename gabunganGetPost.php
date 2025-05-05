<?php
// Ambil ID dari URL (GET)
$id = $_GET['id'] ?? null;

// Jika tidak ada ID, beri pesan dan hentikan proses
if (!$id) {
    echo "Tidak ada ID yang diberikan.";
    exit;
}

// Jika form dikirim (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $komentar = $_POST['komentar'];
    echo "<h3>Berhasil mengirim komentar untuk produk ID: $id</h3>";
    echo "<p>Komentar: " . htmlspecialchars($komentar) . "</p><hr>";
}
?>

<h2>Form Komentar untuk Produk ID: <?= htmlspecialchars($id) ?></h2>
<form method="post">
    <label>Masukkan Komentar Anda:</label><br>
    <textarea name="komentar" rows="4" cols="40" required></textarea><br><br>
    <input type="submit" value="Kirim Komentar">
</form>
