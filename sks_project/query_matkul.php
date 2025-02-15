<?php
include 'database.php';

$sql = "SELECT a.nama, b.matkul, c.jml_sks FROM mahasiswa a 
        JOIN sks b ON a.id_sks = b.id_sks 
        JOIN sks c ON a.id_sks = c.id_sks";

$result = $conn->query($sql);

echo "<h2>Data Mata Kuliah Mahasiswa</h2>";
echo "<table border='1'><tr><th>Mahasiswa</th><th>Mata Kuliah</th><th>Jumlah SKS</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["nama"]."</td><td>".$row["matkul"]."</td><td>".$row["jml_sks"]."</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
}
echo "</table>";
$conn->close();
?>
