<?php
$kongtif = $_GET['kongtif'];
$efektif = $_GET['efektif'];
$tugas   = $_GET['tugas'];
$kelas   = $_GET['kelas'];
$soal    = $_GET['soal'];
$tanya   = $_GET['tanya'];
$materi  = $_GET['materi'];
$kuliah  =$_GET['kuliah'];
$menjawab = $_GET['menjawab'];
$kelas1    = $_GET['kelas1'];
$waktu    = $_GET['waktu'];
$terlambat= $_GET['terlambat'];
$masalah  = $_GET['masalah'];
$pembahasan =$_GET['pembahasan'];
$kejenuhan  =$_GET['kejenuhan'];

echo "Pilih kontif :" . $kongtif; 
echo "<br/>";
echo "Rerata Kemampuan Efektif :". $efektif;
echo "<br>";
echo "Kedisiplinan/Ketepatan Pengumpulan Tugas(Jika Tidak Ada, nilai = 1) :" . $tugas;
echo "<br>";
echo "Ketertiban/Suasana Kelas :" . $kelas;
echo "<br>";
echo "Pembahasan Latihan Soal :" .$soal;
echo "<br>";
echo "Kualitas Diskusi Dan Tanya Jawab :" .$tanya;
echo "<br>";
echo "Kemampuan Menjelaskan Materi :". $materi;
echo "<br>";
echo "Penguasaan Materi Kuliah :" .$kuliah;
echo "<br>";
echo "Kemampuan Menjawab Pertanyaan :". $menjawab;
echo "<br>";
echo "Penguasaan Kelas :" .$kelas1;
echo "<br>";
echo "Keterlambatan Waktu Mengajar :" . $waktu;
echo "<br>";
echo "jumlah Mahasiswa Yang Terlambat :" .$terlambat;
echo "<br>";
echo "Pemberian Sanksi Mahasiswa Bermasalah :". $masalah;
echo "<br>";
echo "Pembahasan Tugas (Jika Ada) : " .$pembahasan;
echo "<br>";
echo "Tingkat Kejenuhan Hari Ini  :" .$kejenuhan;
echo "<br>";
?>