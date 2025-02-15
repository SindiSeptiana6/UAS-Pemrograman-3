<?php
include 'database.php';

$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$jml_sks = $_POST['jml_sks'];

$sql_mhs = "INSERT INTO mahasiswa (nama) VALUES ('$nama')";
$conn->query($sql_mhs);
$id_mhs = $conn->insert_id;

$sql_sks = "INSERT INTO sks (id_mhs, matkul, jml_sks) VALUES ('$id_mhs', '$matkul', '$jml_sks')";
$conn->query($sql_sks);

echo "Data berhasil disimpan!";
$conn->close();
?>
