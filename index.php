<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web 11</title>
</head>
<body>
<form method="get" action="add.php">
<table border="4" width="1000">
<tr>
    <td colspan="3" height="10" >B.Evaluasi Kerja</td>
</tr>
<tr>
    <td colspan="3" height="60" >Arti Nilai</td>
</tr>
<tr>
    <td>1</td>
    <td colspan="3">Sangat Tidak Baik/Sangat Rendah/Tidak Pernah</td>
</tr>
<tr>
    <td>2</td>
    <td colspan="3"> Tidak Baik/ Rendah/Jarang</td>
</tr>
<tr>
    <td>3</td>
    <td colspan="3"> Biasa/ Cukup/Kadang-kadang</td>
</tr>
<tr>
    <td>4</td>
    <td colspan="3"> Baik/ Tinggi/Sering</td>
</tr>
<tr>
    <td>5</td>
    <td colspan="3"> Sangat Baik/ Sangat Tinggi/Selalu</td>
</tr>
<tr>
    <td>NO</td>
    <td>kiteria</td>
    <td>nilai</td>
</tr>
<tr>
    <td colspan="3" height="60">B.1 Mahasiswa</td>
</tr>
<tr>
    <td>1</td>
    <td>Rerata Kemampuan kongtif:</td>
    <td><input type="radio" name="kongtif" value="1">1<br/></td>
    <td><input type="radio" name="kongtif" value="2">2<br/></td>
    <td><input type="radio" name="kongtif" value="3">3<br/></td>
    <td><input type="radio" name="kongtif" value="4">4<br/></td>
    <td><input type="radio" name="kongtif" value="5">5<br/></td>
</tr>
<tr>
    <td>2</td>
    <td>Rerata Kemampuan Efektif :</td>
    <td><input type="radio" name="efektif" value="1">1<br/></td>
    <td><input type="radio" name="efektif" value="2">2<br/></td>
    <td><input type="radio" name="efektif" value="3">3<br/></td>
    <td><input type="radio" name="efektif" value="4">4<br/></td>
    <td><input type="radio" name="efektif" value="5">5<br/></td>
</tr>
<tr>
    <td>3</td>
    <td>Kedisiplinan/Ketepatan Pengumpulan Tugas(Jika Tidak Ada, nilai = 1)</td>
    <td><input type="radio" name="tugas" value="1">1 <br/></td>
    <td><input type="radio" name="tugas" value="2">2 <br/></td>
    <td><input type="radio" name="tugas" value="3">3 <br/></td>
    <td><input type="radio" name="tugas" value="4">4 <br/></td>
    <td><input type="radio" name="tugas" value="5">5 <br/></td>
</tr>
<tr>
    <td>4</td> 
    <td>Ketertiban/Suasana Kelas</td>
    <td><input type="radio" name="kelas" value="1">1 <br/></td>
    <td><input type="radio" name="kelas" value="2">2 <br/></td>
    <td><input type="radio" name="kelas" value="3">3 <br/></td>
    <td><input type="radio" name="kelas" value="4">4 <br/></td>
    <td><input type="radio" name="kelas" value="5">5 <br/></td>
</tr>
<tr>
    <td colspan="3" height="60">B.2 Dosen(Evaluasi Diri Dalam PBM)</td>
</tr>
<tr>
    <td>1</td>
    <td>Pembahasan Latihan Soal</td>
    <td><input type="radio" name="soal" value="1">1 <br></td>
    <td><input type="radio" name="soal" value="2">2 <br></td>
    <td><input type="radio" name="soal" value="3">3 <br></td>
    <td><input type="radio" name="soal" value="4">4 <br></td>
    <td><input type="radio" name="soal" value="5">5 <br></td>
</tr>
<tr>
    <td>2</td>
    <td> Kualitas Diskusi Dan Tanya Jawab</td>
    <td><input type="radio" name="tanya" value="1">1 <br></td>
    <td><input type="radio" name="tanya" value="2">2 <br></td>
    <td><input type="radio" name="tanya" value="3">3 <br></td>
    <td><input type="radio" name="tanya" value="4">4 <br></td>
    <td><input type="radio" name="tanya" value="5">5 <br></td>
</tr>
<tr>
    <td>3</td>
    <td>Kemampuan Menjelaskan Materi</td>
    <td><input type="radio" name="materi" value="1">1 <br></td>
    <td><input type="radio" name="materi" value="2">2 <br></td>
    <td><input type="radio" name="materi" value="3">3 <br></td>
    <td><input type="radio" name="materi" value="4">4 <br></td>
    <td><input type="radio" name="materi" value="5">5 <br></td>
</tr>
<tr>
    <td>4</td>
    <td>Penguasaan Materi Kuliah</td>
    <td><input type="radio" name="kuliah" value="1">1 <br></td>
    <td><input type="radio" name="kuliah" value="2">2 <br></td>
    <td><input type="radio" name="kuliah" value="3">3 <br></td>
    <td><input type="radio" name="kuliah" value="4">4 <br></td>
    <td><input type="radio" name="kuliah" value="5">5 <br></td>
</tr>
<tr>
    <td>5</td>
    <td>Kemampuan Menjawab Pertanyaan</td>
    <td><input type="radio" name="menjawab" value="1">1 <br></td>
    <td><input type="radio" name="menjawab" value="2">2 <br></td>
    <td><input type="radio" name="menjawab" value="3">3 <br></td>
    <td><input type="radio" name="menjawab" value="4">4 <br></td>
    <td><input type="radio" name="menjawab" value="5">5 <br></td>
</tr>
<tr>
    <td>6</td>
    <td>Penguasaan Kelas</td>
    <td><input type="radio" name="kelas1" value="1">1 <br></td>
    <td><input type="radio" name="kelas1" value="2">2 <br></td>
    <td><input type="radio" name="kelas1" value="3">3 <br></td>
    <td><input type="radio" name="kelas1" value="4">4 <br></td>
    <td><input type="radio" name="kelas1" value="5">5 <br></td>
</tr>
<tr>
    <td colspan="3" height="50">>> Keterlambatan Waktu Mengajar</td>
</tr>
<tr>
        <td colspan="3"><input type="radio" name="waktu" value="20 menit">>20 Menit
        <input type="radio" name="waktu" value="10-20 menit">10-20 Menit
        <input type="radio" name="waktu" value="1-10 menit">1-10 Menit
        <input type="radio" name="waktu" value="Tepat waktu">Tepat Waktu
</td>
</tr>
<tr>
        <td colspan="3" height="50">>> Jumlah Mahasiswa Yang Terlambat</td>
</tr>
<tr>
        <td colspan="3"><input type="radio" name="terlambat" value="6mhs">> 6mhs
        <input type="radio" name="terlambat" value="2-5mhs">2-5 mhs
        <input type="radio" name="terlambat" value="1-2mhs">1-2 mhs
        <input type="radio" name="terlambat" value="Tidak ada">Tidak Ada 
</td>
</tr>
<tr>
        <td colspan="3" height="50">>> Pemberian Sanksi Mahasiswa Bermasalah :
        <input type="radio" name="masalah" value="ya"> Ya
        <input type="radio" name="masalah" value="Tidak"> Tidak  
</tr>
<tr>
        <td colspan="3" height="50">>> Pembahasan Tugas (Jika Ada)</td>
</tr>
<tr>
        <td colspan="3"><input type="radio" name="pembahasan" value="25%"> 25%
        <input type="radio" name="pembahasan" value="25-50%"> 25-50%
        <input type="radio" name="pembahasan" value="51-75%">51-75%
        <input type="radio" name="pembahasan" value="75%">75% 
</td>
</tr>
<tr>
        <td colspan="3" height="50">>>Tingkat Kejenuhan Hari Ini</td>
</tr>
<tr>
        <td colspan="3"><input type="radio" name="kejenuhan" value="Sangat Jenuh"> Sangat Jenuh
        <input type="radio" name="kejenuhan" value="Jenuh"> Jenuh
        <input type="radio" name="kejenuhan" value="Enjoy"> Enjoy
        <input type="radio" name="kejenuhan" value="Sangat Enjoy"> Sangat Enjoy 
</td>
</tr>
</table>
<input type="submit" height="50" value="oke">
</form>
</body>
</html>