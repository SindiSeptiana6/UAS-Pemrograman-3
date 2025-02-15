<!DOCTYPE html>
<html>
<head>
    <title>Input SKS Mahasiswa</title>
</head>
<body>
    <h2>Input Mata Kuliah</h2>
    <form action='proses.php' method='POST'>
        Nama Mahasiswa: <input type='text' name='nama' required><br>
        Mata Kuliah: <input type='text' name='matkul' required><br>
        Jumlah SKS: <input type='number' name='jml_sks' required><br>
        <input type='submit' value='Simpan'>
    </form>
</body>
</html>
