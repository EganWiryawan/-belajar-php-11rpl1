<?php 
    // variable
    // $1nama; Contoh Salah (karena di awali angka)
    // $#nama; Contoh Salah (Ada dimbol di tengah)
    // nama; Contoh salah (tidak ada simbol $)
    $nama = "Egan Wiryawan";
    $usia = 16;
    echo "Nama saya $nama <br>";
    echo "Usia saya $usia tahun";
    // Tipe data(Interger, float, String)
    // (bloolean Array)
    $namalengkap = "Egan Wiryawan90";
    $umur = 16;
    $nilai = 80.56; // FLoat

    $jomblo = TRUE; // Boolean (TRUE/FALSE)

    // Array string
    $namarpl1 = array("Alya", "Dwi", "Eben");

    echo "Nama Lengkap : $namalengkap <br>";
    echo "Umur : $umur <br>";
    echo "Nilai : $nilai <br>";
    echo "jomblo : $jomblo <br>";
    echo "<hr>";        
    echo "Array 0 : $namarpl1[0] <br>"; // Alya
    echo "Array 2 : $namarpl1[2] <br>"; // eben 

    //Operator (+ - / * %)
    echo "Angka1 :". $angka1 = 10; echo "<br>"; 
    echo "Angka2 :". $angka2 = 5; echo "<hr>"; 

    echo "Tambah :". $tambah = $angka1 + $angka2 . "<br>";
    echo "Kurang :". $kurang = $angka1 - $angka2 . "<br>";
    echo "Bagi :". $bagi = $angka1 / $angka2 . "<br>";
    echo "Kali :". $kali = $angka1 * $angka2 . "<br>";
    echo "Sisa Bagi :". $sisabagi = $angka1 % $angka2 . "<br>";
    echo "<hr>"; 

    // Operator Perbandingan (>, <, !=, ==, ===)
    // Return TRUE(1), FALSE(NULL / KOSONG)
    $a = 10;
    $b = 5;
    $c = "10";

    echo "== :"; echo $a == $c; echo "<br>";
    echo "> :"; echo $a > $b; echo "<br>";
    echo "< :"; echo $a < $b; echo "<br>";
    echo "!= :"; echo $a != $b; echo "<br>";
    echo "=== :"; echo $a === $c; echo "<br>";

    // Operator Logika (AND, OR, &&, ||)
    // IF ELSE

    $x = 10;
    $y = 20;

    if ($x == 10 AND $y == 20)(echo "Terpenuhi 2 Variable <hr>";)
    if ($x == 10 OR $y == 20)(echo "Salah satu Variable Terpenuhi <hr>";)
?>