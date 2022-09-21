<h1>Tambah data</h1>
<form action="input-siswa-tambah.php" method="POST">
    <label for="nis"> Nomor Induk siswa :</label><br>
    <input type="number" name="nis" placeholder="Ex. 12001142" /><br>

    <label for="nama"> Nama Lengkap :</label><br>
    <input type="text" name="nama" placeholder="Ex. Firdaus" /><br>

    <label for="kelas"> kelas :</label><br>
    <input type="text" name="kelas" /><br>

    <label for="kehadiran"> Nilai Kehadiran :</label><br>
    <input type="number" name="kehadiran" placeholder="Ex. 80.56" /><br>

    <label for="tugas"> Nilai Tugas :</label><br>
    <input type="number" name="tugas" placeholder="Ex. 80.56" /><br>

    <label for="UTS"> Nilai UTS :</label><br>
    <input type="number" name="UTS" placeholder="Ex. 80.56" /><br>

    <label for="UAS"> Nilai UAS :</label><br>
    <input type="number" name="UAS" placeholder="Ex. 80.56" /><br>
    
    <input type="submit" name="simpan" value="simpan data" /><br>
    <a href="input-siswa.php">Kembali</a>
</form>

<?php 
    if( isset($_POST{"simpan"})) {
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $UTS = $_POST["UTS"];
        $UAS = $_POST["UAS"];

        // CREATE - menambahkan data ke database
        $query = "
            INSERT INTO siswa_nilai VALUES
            ('$nis','$nama','$kelas','$kehadiran','$tugas','$UTS','$UAS');
        ";

        include ('./input-config-siswa.php');
        $insert = mysqli_query($mysqli, $query);

        if($insert){
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location='input-siswa.php';
                </script>
            ";
        }
    }
?>