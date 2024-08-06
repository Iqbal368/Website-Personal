<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main>
        <h2>Selamat datang di Situs Kami</h2>
        <p>Ini adalah halaman beranda.</p>
        <h3>Bulan:</h3>
        <ul id="bulan-list"></ul>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    
    <script>
        // JavaScript untuk menambahkan daftar bulan menggunakan perulangan
        const bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        const bulanList = document.getElementById('bulan-list');

        for (let i = 0; i < bulan.length; i++) {
            const listItem = document.createElement('li');
            listItem.textContent = bulan[i];
            bulanList.appendChild(listItem);
        }
    </script>
</body>
</html>
