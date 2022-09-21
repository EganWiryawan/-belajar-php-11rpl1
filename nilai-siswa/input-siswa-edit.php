<?php 
    if( isset($_GET["nis"])){
        $nis = $_GET["nis"];
        $check_nis = "SELECT * FROM siswa_nilai WHERE nis = '$nis'; ";
        include('./input-config-siswa.php');
        $query = mysqli_query($mysqli, $check_nis);
        $row = mysqli_fetch_array($query);
    }
?>

<h1>Edit data</h1>
<form action="input-siswa-edit.php" method="POST">
    <label for="nis"> Nomor Induk siswa :</label><br>
    <input value="<?php echo $row["nis"]; ?>" readonly type="number" name="nis" placeholder="Ex. 12001142" /><br>

    <label for="nama"> Nama Lengkap :</label><br>
    <input value="<?php echo $row["nama_lengkap"]; ?>" type="text" name="nama" placeholder="Ex. Firdaus" /><br>

    <label for="kelas"> kelas :</label><br>
    <input value="<?php echo $row["kelas"]; ?>" type="text" name="kelas" placeholder="Ex. 11 RPL 1" /><br>

    <label for="kehadiran"> Nilai kehadiran :</label><br>
    <input value="<?php echo $row["kehadiran"]; ?>" type="number" name="kehadiran" placeholder="Ex. 80.56" /><br>

    <label for="tugas"> Nilai Tugas :</label><br>
    <input value="<?php echo $row["tugas"]; ?>" type="number" name="tugas" placeholder="Ex. 80.56" /><br>

    <label for="UTS"> Nilai UTS :</label><br>
    <input value="<?php echo $row["UTS"]; ?>" type="number" name="UTS" placeholder="Ex. 80.56" /><br>

    <label for="UAS"> Nilai UAS :</label><br>
    <input value="<?php echo $row["UAS"]; ?>" type="number" name="UAS" placeholder="Ex. 80.56" /><br>
    
    <input type="submit" name="simpan" value="simpan data" /><br>
    <a href="input-siswa.php">Kembali</a>
</form>

<?php 
    if( isset($_POST["simpan"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $UTS = $_POST["UTS"];
        $UAS = $_POST["UAS"];

        // EDIT - Memperbarui Data
        $query = "
            UPDATE siswa_nilai SET nama_lengkap = '$nama',
            kelas = '$kelas',
            kehadiran = '$kehadiran',
            tugas = '$tugas',
            UTS = '$UTS',
            UAS = '$UAS'
            WHERE nis = '$nis';
        ";

        include ('./input-config-siswa.php');
        $update = mysqli_query($mysqli, $query);

        if($update){
            echo "
                <script>
                alert('Data berhasil Diperbaharui');
                window.location='input-siswa.php';
                </script>
            ";
        }else{
            echo "
                <script>
                alert('Data gagal');
                window.location='input-siswa-edit.php?nis=$nis';
                </script>
            ";
        }
    }
?>