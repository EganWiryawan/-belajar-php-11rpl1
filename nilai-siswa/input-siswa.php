<?php
    include('./input-config-siswa.php');
    echo "<a href='input-siswa-tambah.php'>Tambah Data</a>";
    echo "<hr>";

    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli, " SELECT * FROM siswa_nilai ");
    while($row = mysqli_fetch_array($data)) {
        $nilai_akhir=($row["kehadiran"]+$row["tugas"]+$row["UTS"]+$row["UAS"])/4;
        $tabledata .= "
            <tr>
                <td>".$row["nis"]."</td>
                <td>".$row["nama_lengkap"]."</td>
                <td>".$row["kelas"]."</td>
                <td>".$row["kehadiran"]."</td>
                <td>".$row["tugas"]."</td>
                <td>".$row["UTS"]."</td>
                <td>".$row["UAS"]."</td>
                <td>".$nilai_akhir."</td>
                <td>
                    <a href='input-siswa-edit.php?nis=".$row["nis"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a href= 'input-siswa-hapus.php?nis=".$row["nis"]."'
                    onclick='return confirm(\"Yakin Hapus Dek ?\");'>Hapus</a>
                </td>
            </tr>
        ";
        $no++;
    }

    echo "
        <table cellpading=5 border=1 cellspacing=0>
            <tr>
                <th>NIS</th>
                <th>Nama lengkap</th>
                <th>kelas</th>
                <th>kehadiran</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>nilai_akhir</th>
                <th>Aksi</th>
            </tr>
            $tabledata
        </table>
    ";
?>