<h1>Tambah Data</h1>
<form action="kwu-tambah.php" method="POST">
    <label for="kodebarang"> kodebarang :</label>
    <input  type="number" name="kodebarang" placeholder="Ex. 1234567890"/><br>

    <label for="tanggal"> tanggal :</label>
    <input  type="date" name="tanggal" placeholder="Ex. 16-06-2006"/><br>

    <label for="namabarang"> namabarang :</label>
    <input  type="text" name="namabarang" placeholder="Ex. indomie"/> <br>

    <label for="pembeli"> pembeli :</label>
    <input  type="text" name="pembeli" placeholder="Ex. egan"/><br>

    <label for="qty"> qty :</label>
    <input  type="number" name="qty" placeholder="Ex. 5"/><br>

    <label for="hagabeli"> hargabeli :</label>
    <input  type="number" name="hargabeli" placeholder="Ex. 5000"/><br>

    <label for="hargajual"> hargajual :</label>
    <input  type="number" name="hargajual" placeholder="Ex. 8000"/><br>

    <input type="submit" name="simpan" value="simpan data"/>
    <a href="kwu.php"> Kembali</a>
</form>

<?php
    if ( isset($_POST["simpan"]) ) {
        $kodebarang = $_POST["kodebarang"];
        $tanggal = $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $namabarang = $_POST["namabarang"];
        $qty = $_POST["qty"];
        $hargabeli = $_POST["hargabeli"];
        $hargajual = $_POST["hargajual"];

      // CREATE - Menambahkan Data Ke Database
      $query = "
            INSERT INTO transaksi VALUES
            ('$kodebarang','$tanggal','$pembeli','$namabarang','$qty','$hargabeli','$hargajual');
      ";

    include ('./kwu-config.php');
    $insert = mysqli_query($mysqli, $query);

    if ($insert) {
        echo "
            <script>
                 alert(' Data berhasil ditambahkan');
                 window.location='kwu.php';
            </script>
        ";
     }
    }
?>