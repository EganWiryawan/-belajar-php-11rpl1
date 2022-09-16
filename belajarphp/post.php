<form action="post.php" method="post">
    <input type="text" name="namalengkap" placeholder="Ex. indra El"/> <br>
    <input type="text" name="Kelas" placeholder="11 rpl 1"/> <br>
    <input type="number" name="Nis" placeholder="1234"/> <br>
    <input type="submit" name="simpan" value="simpan data">
</form>

<?php
    if(isset($_POST["simpan"])){
        echo "<hr>";
        
        $namalengkap = $_POST ["namalengkap"];
        $Kelas = $_POST ["Kelas"];
        $Nis = $_POST ["Nis"];
        
        echo "Nama Lengkap = ". $namalengkap . "<br>";
        echo "Kelas = ". $Kelas . "<br>"; 
        echo "Nis = ". $Nis ."<br>"; 
    }
?>