<?php
if (isset($_POST["submit"])) {
    require_once "class_mhs.php";

    // codingan kalian

}

<?php
require_once 'class_nilaimahasiswa.php';

// Membuat instance dari class NilaiMahasiswa
$nilaiMahasiswa = new NilaiMahasiswa('12345678', 'Pemrograman Web', 80);

// Menampilkan data mahasiswa dan hasilnya
echo "NIM: " . $nilaiMahasiswa->nim . "<br>";
echo "Mata Kuliah: " . $nilaiMahasiswa->matakuliah . "<br>";
echo "Nilai: " . $nilaiMahasiswa->nilai . "<br>";
echo "Grade: " . $nilaiMahasiswa->grade() . "<br>";
echo "Hasil: " . $nilaiMahasiswa->hasil() . "<br>";
?>